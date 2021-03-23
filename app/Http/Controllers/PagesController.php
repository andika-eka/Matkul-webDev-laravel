<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $num = rand();
        return view('admin.index', compact('num'));
    }
}
