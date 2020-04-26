<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use DB;

class HomeController extends Controller
{
    public function index()
    {
            return User::all();
    }
}
