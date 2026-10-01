<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventController extends Controller
{
    function index(){
        return view("index");
    }

    function events(){
        $events = [
            [
                "name" => "Web Development Workshop",
                "date" => "25 September 2026",
                "description" => "Learn the fundamentals of modern web development and build your first website."
            ],
            [
                "name" => "AI Seminar",
                "date" => "30 September 2026",
                "description" => "Explore artificial intelligence, current trends, and practical applications of AI."
            ],
            [
                "name" => "Coding Competition",
                "date" => "05 October 2026",
                "description" => "Test your programming skills by solving challenging coding problems."
            ]
        ];

        return view("events", ["events" => $events]);
    }
}
