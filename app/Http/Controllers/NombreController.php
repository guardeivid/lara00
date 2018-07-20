<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NombreController extends Controller
{
    
    public function index($id)
    {
        return $id . 'uu';
    }
}
