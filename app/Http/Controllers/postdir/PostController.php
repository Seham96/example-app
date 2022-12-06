<?php

namespace App\Http\Controllers\postdir;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function show2($id)
    {
        echo "Hi from PostController" . $id;
    }

    function create(){

        return view('welcome');
    }
}
