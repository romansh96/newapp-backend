<?php

namespace App\Http\Controllers\Posts\Admin;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    {
        return 'Page a list of posts';
    }

    public function create()
    {
        return 'Page of a post creation';
    }

    public function store()
    {
        return 'Request of post creation';
    }

    public function show()
    {
        return 'Page of post overview';
    }

    public function edit()
    {
        return 'Page of post editing';
    }

    public function update()
    {
        return 'Request of post editing';
    }

    public function delete()
    {
        return 'Request to delete the page';
    }

    public function like()
    {
        return 'Like + 1';
    }
}
