<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{   
    function adminPage(){
        if(View::exists('adminPass.page')){// if adminPass.sign (different variable)
            return view('adminPass.page');
        }
        else{
            return "View not found";// this will be the result
        }
    }

    //Route to Admin Page
    function adminUser(){
        return view ('admin.admin');
    }
}
