<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function printX()
    {
        //$name ='Yousef';

        $data = ['Yousef','Ahmad','Mohammad'];

        return view('welcome',compact('data'));
    }
}   