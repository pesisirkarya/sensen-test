<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    function checkData(Request $data){
        $da = 'kkkkkk';
        return view('home', ['data'=> $da]);
    }
}