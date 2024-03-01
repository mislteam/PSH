<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class AccountController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('backend.account.show', compact('user'));
    }

    public function changepasswordPage($id)
    {
        $user = User::findOrFail($id);
        return view('backend.account.changePassword', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('backend.account.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'confirm_password' => 'same:new_password'
        ]);

        $current_password = $request->current_password;
        $confirm_password = $request->confirm_password;
        $old_password = auth()->user()->password;
        if (Hash::check($current_password, $old_password)) {
            $user->update([
                'password' => Hash::make($confirm_password),
            ]);
        } else {
            throw ValidationException::withMessages([
                'current_password' => 'The password you entered does not match your current password.',
            ]);
        }

        return redirect()->route('accountShow', auth()->id())->with('message', 'Password changed successfully');
    }

    public function updateAccount(Request $request, $id)
    {

        $user = User::findOrFail($id);

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            // 'company' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $user = User::where('id', $id)->first();
            $dbImage = $user->image() && $user->image()->exists() ? $user->image->path : null;
            if ($dbImage != null) {
                unlink(public_path('profile/'.$dbImage));
                // Storage::delete('public/profile' . $dbImage);
                $user->image()->delete();
            }
            $fileName = uniqid() . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('profile'), $fileName);
            // ['image'] = $fileName;
            $user->image()->create([
                'path' => $fileName,
            ]);
        }

        $user->update($data);
        return redirect()->route('accountShow', auth()->id())->with('message', 'Account Updated successfully');
    }
}
