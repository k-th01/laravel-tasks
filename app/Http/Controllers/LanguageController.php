<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LanguageController extends Controller
{
    // Simple Controller Function --> Web.php
    function subLanguage(){
        return view ('language');
    }
}