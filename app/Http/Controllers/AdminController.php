<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
 public function show($id)
 {
     $post = Post::find($id);
     $candidates = $post->users;
     return view('admin-candidates.show',compact('post','candidates'));
 }
}
