<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // TODO-vardump VAR_DUMP
        die(var_dump('index'));


    }

    public function test1(Request $request)
    {
        $yyy=1;
        die(var_dump('test1'));
    }
}
