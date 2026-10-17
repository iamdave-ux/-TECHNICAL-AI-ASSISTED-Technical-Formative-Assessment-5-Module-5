<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        // Static array of at least 5 sample records
        $users = [
            ['id' => 1, 'username' => 'admin_joe', 'role' => 'Administrator', 'status' => 'Active'],
            ['id' => 2, 'username' => 'cashier_sue', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 3, 'username' => 'manager_bob', 'role' => 'Manager', 'status' => 'Inactive'],
            ['id' => 4, 'username' => 'staff_lisa', 'role' => 'Staff', 'status' => 'Active'],
            ['id' => 5, 'username' => 'cashier_tim', 'role' => 'Cashier', 'status' => 'Active'],
        ];

        return view('users', compact('users'));
    }
}