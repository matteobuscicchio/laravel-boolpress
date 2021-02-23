<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tags;

class TagsController extends Controller
{
    public function index()
    {
        return response()->json([
            'data'=> App\Tags::all() 
        ], 200);
    }

}