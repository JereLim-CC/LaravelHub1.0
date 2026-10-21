<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'role' => 'Administrator'
            ],
            [
                'id' => 2,
                'name' => 'Juan Dela Cruz',
                'email' => 'juan@example.com',
                'role' => 'Cashier'
            ],
            [
                'id' => 3,
                'name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'role' => 'Manager'
            ],
            [
                'id' => 4,
                'name' => 'Pedro Reyes',
                'email' => 'pedro@example.com',
                'role' => 'Cashier'
            ],
            [
                'id' => 5,
                'name' => 'Ana Garcia',
                'email' => 'ana@example.com',
                'role' => 'Staff'
            ],
        ];

        return view('users', compact('users'));
    }
}
