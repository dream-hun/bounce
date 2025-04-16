<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

final class BlogController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $articles = Blog::where('status', 'published')->orderBy('created_at', 'DESC')->get();

        return view('blog', ['articles' => $articles]);
    }
}
