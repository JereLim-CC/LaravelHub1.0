<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'id' => 1,
                'name' => 'Juan Dela Cruz',
                'email' => 'juan@example.com',
                'status' => 'Active'
            ],
            [
                'id' => 2,
                'name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'status' => 'Active'
            ],
            [
                'id' => 3,
                'name' => 'Pedro Reyes',
                'email' => 'pedro@example.com',
                'status' => 'Inactive'
            ],
            [
                'id' => 4,
                'name' => 'Ana Garcia',
                'email' => 'ana@example.com',
                'status' => 'Active'
            ],
            [
                'id' => 5,
                'name' => 'Mark Ramos',
                'email' => 'mark@example.com',
                'status' => 'Inactive'
            ],
        ];

        return view('customers', compact('customers'));
    }
}
