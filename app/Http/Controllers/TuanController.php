<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class TuanController extends Controller
{
    //
    public function index()
    {
        $data=Flight::all();
        return view('tuan', compact('data'));
    }
}
