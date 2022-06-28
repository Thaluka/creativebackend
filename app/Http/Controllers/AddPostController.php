<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AddPostController extends Controller
{
    public function store(Request $req)
    {
        $post = new Post;
        $post->title=$req->title;
        $post->websiteId='1';
        $post->description=$req->description;
        $post->image='fff';
        $post->createdBy=$req->name;
        $post->save();
    }
}
