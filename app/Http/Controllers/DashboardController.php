<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('id', 'desc')->get();
        $recentStudents = Student::orderBy('id', 'desc')->take(5)->get();
        
        return view('dashboard', compact('students', 'recentStudents'));
    }
}