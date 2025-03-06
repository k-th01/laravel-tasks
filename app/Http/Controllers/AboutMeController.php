<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    // Blade Template Tutorial #11 - Displaying Variables
    function userBio() {
        $name = "Keth";
        $country = "Philippines";
        $age = "21";
        $webapp = "Laravel";
        $year = "2025";

        return view('bio',["name"=>$name,'ph'=>$country, 'age'=>$age, 'web'=>$webapp, 'yr'=>$year]);
    }
}
