<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Blog $blog)
    {
        return $blog->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'title' => 'required | string | max:255 | unique:blogs',
            'body' => 'required | string',
        ]);

        $createBlog = $request->user()->blogs()->create($credentials);

        /*Blog::create($credentials);*/

        return $createBlog;
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return $blog;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $credentials = $request->validate([
            'title' => 'string | max:255 | unique:blogs',
            'body' => 'string',
        ]);

        $blog->update($credentials);

        return '<p>The Blog is updated</p>';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return '<p>The blog is deleted</p>';
    }
}
