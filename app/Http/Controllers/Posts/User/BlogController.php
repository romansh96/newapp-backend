<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return 'Posts in the blog';
    }

    public function show($post)
    {
        return 'One post in the blog';
    }

    public function like($post)
    {
        return 'Give a like';
    }
}
