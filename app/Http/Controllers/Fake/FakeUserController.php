<?php

namespace App\Http\Controllers\Fake;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

class FakeUserController extends UserController
{
    public function index()
    {
        $vvv =8888;
        $kkk=5555;
        $rrr=22222;
        // TODO-vardump VAR_DUMP
        die(var_dump('fakeindex'));

    }

    public function test1()
    {
        // TODO-vardump VAR_DUMP
        die(var_dump('fake test1'));


    }

}
