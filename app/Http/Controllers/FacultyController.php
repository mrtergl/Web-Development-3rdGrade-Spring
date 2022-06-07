<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    function getFaculty()
    {
        return  Faculty::all();
    }
}
