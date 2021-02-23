<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Articles;

class ArticlesController extends Controller
{
    public function index()
    {
        return response()->json([
            'data'=> App\Article::all() 
        ], 200);
    }

}
