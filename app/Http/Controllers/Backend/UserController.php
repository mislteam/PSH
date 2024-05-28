<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\User;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ResponseController;

class UserController extends ResponseController
{
    public function index()
    {
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', '!=', 'user');
        })->paginate(10);
        return view('backend.user.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('backend.user.show', compact('user'));
    }

    public function create()
    {
        $roles = Role::where('name', '!=', 'admin')->get();
        $producttype = ProductType::all();
        return view('backend.user.create', compact('roles','producttype'));
    }

    public function store(Request $request)
    {
        // dd($request->role);
        $request->validate([
            'name' => 'required',
            'email' => 'required |unique:users',
            'password' => 'min:8 |max:20|same:confirm_password',
            'confirm_password' => 'min:8|max:20'
        ]);

        $user = User::create([
            'idNumber' => '',
            'user_id' => User::latest('user_id')->first()->user_id + 1,
            'name' => $request->name,
            'email' => $request->email,
            'product_type_id' => intval($request->product_type),
            'email_verified_at' => Carbon::now(),
            'front_img' => 'front-img.png',
            'back_img' => 'back-img.png',
            'password' => bcrypt($request->password),
        ]);
        
        $user->assignRole($request->role);
        
        if ($request->role == 3) {
            return redirect()->route('customer.index')->with('message', 'Customer created successfully');
        }

        return redirect()->route('userIndex')->with('message', 'User created successfully');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::where('name', '!=', 'admin')->get();
        $producttype = ProductType::all();
        return view('backend.user.edit', compact('user', 'roles','producttype'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($id),
            ],
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'product_type_id' => intval($request->product_type)
        ]);

        $user->assignRole($request->role);
        return redirect()->route('userIndex')->with('message', 'User Updated Successfully');
    }

    public function change_state(Request $request)
    {
        $user = User::findOrFail($request->id);
        if ($user) {
            if ($user->status == 0) {
                $user->status = 1;
                $user->save();
                return $this->successMessage($user, 'User Ban Successfully');
            } else {
                $user->status = 0;
                $user->save();
                return $this->successMessage($user, 'User Unbanned Successfully');
            }
        } else {
            return $this->errorMessage();
        }
    }

    public function delete(Request $request)
    {
        $user = User::find($request->id);
        if ($user) {
            $user->delete();
            return $this->successMessage('', 'User Deleted Successfully');
        } else {
            return $this->errorMessage();
        }
    }
}
