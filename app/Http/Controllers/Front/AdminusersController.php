<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminusersController extends Controller
{

    public function show(){
        return view('welcome');
    }
}
