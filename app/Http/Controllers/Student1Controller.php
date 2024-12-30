<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Student1Controller extends Controller
{
    public function index()
    {
        // Fetch users who are not teachers (is_teacher = false)
        $students = User::where('is_teacher', false)->get();

        return view('students1', compact('students'));
    }
}
