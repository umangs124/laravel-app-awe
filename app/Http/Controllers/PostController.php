<?php

namespace App\Http\Controllers;

use App\Models\Post;

use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Show All Posts
    public function index()
    {
        return view('posts.index', ['posts' => Post::all()]);
    }
}
