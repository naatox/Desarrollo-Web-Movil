<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUser(){
        return User::with('technologies','interests','networks')->get();

    }
}
