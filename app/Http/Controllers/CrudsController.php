<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class CrudsController extends Controller
{
    public function mensaje()
    {
        
        return Inertia::render("Home", [
            'message' => 'Hello, Inertia.js with React!',
        ]);
    }
}
