<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MenuController extends Controller
{
    public function index(Request $request){
        return view('layouts.common');
    }
}
