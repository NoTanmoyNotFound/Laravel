<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    function show($id){
        return "hello world form  $id";
    }
}
