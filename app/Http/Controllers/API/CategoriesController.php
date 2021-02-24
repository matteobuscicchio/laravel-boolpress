<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'data'=> Categories::all() 
        ], 200);
    }

}