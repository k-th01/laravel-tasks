<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
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

    // Route to Form (home-form) --> Alternate
    function mainForm() {
        return view('userForm');
    }

    function SubPage($name){ // load the main dashboard page and pass the user's name as data
        return view('sub.page',['user'=>$name]);
    }

    // Tutorial #14-15 Form Input and Radio Buttons
    function addUser(Request $request) {
        echo "<p style='font-size: 18px; margin: 5px 0;'>
                👋🏻 Hello, <strong style='color: #212d40;'>" . htmlspecialchars($request->username)."</strong>
              </p>";
            
        echo "<br>";
        
        echo "<span>
                📧 Email: <strong style='color: #212d40;'>" . htmlspecialchars($request->email)."</strong>
              </span>";

        echo "<br>";

        echo "<span>
                📍 City: <strong style='color: #212d40;'>" . htmlspecialchars($request->city)."</strong>
              </span>";
        echo "<br>";            
        echo "<span>
               🎂 Age: <strong style='color: #212d40;'>" . htmlspecialchars($request->age)." years old</strong>
              </span>";
         echo "<br>";
              echo "<span>
              👦🏻 Gender: <strong style='color: #212d40;'>" . htmlspecialchars($request->gender)."</strong>
            </span>";
        
        echo "<br>";
        echo "<b>💡 Skills: </b>";
        // print_r ($request->skills);
        echo implode(", ", (array) $request->skills);

        //Tutorial #16 Form Validation
        $request->validate([
            'username'=>'required | min:5 | max:15',
            'email'=>'required | email',
            'city'=>'required | uppercase',
            'age'=>'required',
            'gender'=>'required',
            'skills'=>'required'

        ],[
            'username.required'=>'Username can not be empty',
            'username.min'=>'Username must be at least 3 characters long',
            'username.max'=>'Username cannot exceed 15 characters',
            'email.email'=>'Please enter a valid email address',
            'city.uppercase'=>'Please enter the City name in uppercase only.'
        ]);
    }
}