<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //get users from model
        $users = User::latest()->get();

        //passing users to view
        return view('users', compact('users'));
    }
}
