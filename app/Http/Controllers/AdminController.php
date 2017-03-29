<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(Request $request)
    {
        return view('admin.home', [
            'title' => 'RoboCms Admin Area',
            'description' => 'Welcome to the RoboCms Admin Control Area'
        ]);
    }
}
