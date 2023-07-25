<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function index(){
        return view('Admin.index');
    }
}
