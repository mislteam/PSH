<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $admin_users = User::whereHas('roles', function ($query) {
            $query->where("id", "!=", [1, 2, 3, 4]);
        })->count();
        $users = User::whereHas('roles', function ($q) {
            $q->where('name', 'user');
        })->count();
        $user = User::whereHas('roles', function ($q) { 
            $q->where('name', 'user');
        })->whereDate('created_at', date('Y-m-d'))->count();

        return view('backend.dashboard', compact('admin_users', 'users','user'));
    }
}
