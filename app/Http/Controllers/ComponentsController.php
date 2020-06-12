<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    // Generating Component
    // php artisan make:component Alert
    // Displaying Component
    // Type <x-Alert /> inside the view
    public function course1()
    {
        return view('course.course1');
    }

    // Passing data to component
    public function course2()
    {
        $message = 'This is danger alert';
        return view('course.course2', ['message' => $message]);
    }
}
