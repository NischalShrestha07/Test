<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $users = [
        //     'name' => "Hulas",
        //     "salary" => 120000,
        //     'age' => 40,
        //     'status' => 'Married'
        // ];

        $user = User::all();
        // return $user;
        $products = [
            'name' => 'Apple',
            'price' => '1200',
            'weight' => '2kg'
        ];


        // $users = [
        //     [
        //         'name' => "Hulas",
        //         "salary" => "120000",
        //         'age' => "40",
        //         'status' => 'Married'
        //     ],
        //     [
        //         'name' => "Hari",
        //         "salary" => "120000",
        //         'age' => "79",
        //         'status' => 'Married'
        //     ],
        //     [
        //         'name' => "Ram",
        //         "salary" => "120000",
        //         'age' => "40",
        //         'status' => 'Single'
        //     ],
        // ];


        return view('test', compact('user', 'products'));
    }
}
