<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;

class CommentController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($post, $comment)
    {
        return "Change the comment {$comment} (post {$post})";
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
