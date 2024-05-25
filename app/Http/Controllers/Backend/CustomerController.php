<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\ProductType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve query parameters from the request
        $perpage = $request->query('perpage', 10);
        $name = $request->query('name');
        $email = $request->query('email');
        $status = $request->query('status');

        $query = User::orderBy('created_at','desc')->whereHas('roles', function ($q) {
            $q->where('name', 'user');
            
        });
        // dd($query);

        if ($name) {
            $query->where('name', 'like', '%' . $name . '%');
        }

        if ($email) {
            $query->where('email', 'like', '%' . $email . '%');
        }

        if ($status) {
            $query->where('status', $status);
        }

        $sessionArray = [
            'perpage' => $perpage,
            'name' => $name,
            'email' => $email,
            'status' => $status
        ];
        session()->put('filter', $sessionArray);
        $customer = $query->whereHas('roles', function ($q) {
            $q->where('name', 'user');
        })->paginate($perpage)->appends($request->except('page'));
        return view('backend.customer.index', compact('customer'));
    }

    // customer Delete
    public function delete(Request $request)
    {
        $user = User::find($request->id);
        if ($user) {
            return $user->with('order')->first();
            // dd($user->with('order'));
            return $this->successMessage('', 'Customer Deleted Successfully');
        } else {
            return $this->errorMessage();
        }
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('backend.customer.show', compact('user'));
    }
}
