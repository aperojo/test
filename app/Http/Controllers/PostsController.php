<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {

    	return view('posts.index');

    }

    public function post($id) {

    	return view('posts.post', ['id' => $id]);
    	return view('posts.post')->with($id);

    }
}
