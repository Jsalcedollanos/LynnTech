<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    

    public function index(){

        return view('admin.index');
        if (auth()->check()) {
            if (auth()->user()->name != '') {
                return view('home.index2');;
            }
        }

    }


}
