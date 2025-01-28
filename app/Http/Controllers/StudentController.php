<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index()
    {
        return student::all();
    }

    function store()
    {
        $student = student::create([
            'name' => 'John 56',
            'tp' => '123456789',
        ]);
        return $student;
    }
}
