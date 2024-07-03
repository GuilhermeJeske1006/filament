<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('Blog.index', [
            'blogs' => Blog::orderBy('created_at', 'desc')->simplePaginate(15)
        ]);

    }


    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('Blog.details', [
            'blog' => $blog
        ]);
    }


}
