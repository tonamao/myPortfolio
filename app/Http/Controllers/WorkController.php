<?php

namespace App\Http\Controllers;

use App\Work;

class WorkController extends Controller
{
    public function index()
    {
        return Work::all();
    }
}
