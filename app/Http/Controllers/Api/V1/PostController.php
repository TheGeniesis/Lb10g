<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Post;
class PostController extends Controller
{
    public function getPost()
    {
        return response()->json([Post::get()], 200);
    }
}
