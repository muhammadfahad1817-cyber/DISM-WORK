<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class userController extends Controller
{
    function displayUser($id){
        // return "Money Follows";
        return view('displayUser', ["id" => $id, "name" => "Ravi Brad Pitt Kishan", "hobbies" =>['Jaldi the late', 'Home from Work', 'Yahan par imandari chala tha babu ghar jake sutti babu', 'Pehchann Money follow my brotha money follows!'],
        "age" => 19
        ]);
    }
}
