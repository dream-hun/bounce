<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $articles=Blog::where('status','published')->orderBy('created_at','DESC')->get();
        return view('blog',compact('articles'));
    }
}
