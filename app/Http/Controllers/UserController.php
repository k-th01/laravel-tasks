<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){
        //return "this is Keth Palanog";
        return view('User');
    }
    function aboutUser($name){

            //return "hello, This is " .$name;
            return view ('User2',['name'=>$name]);
    }

    function adminLogin(){

        //return "hello, This is " .$name;
        return view ('admin.login');
}
}
