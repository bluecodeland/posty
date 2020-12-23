<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct() {

        $this->middleware(['auth']);
         
    }
    
 public function index() 
 {
    $posts = Post::paginate(2);
    // $posts = Post::get(); //get all posts and put in variable;
    // $posts = Post::where(); //get all posts where * and put in variable;
    // $posts = Post::find(); //find all posts with id * wand put in variable;
    

    
    return view('posts.index' , [
        'posts' => $posts
    ]);

 }

 public function store(Request $request) 
 {
     
    $this->validate($request, [
        'body'=> 'required'
    ]);

    $request->user()->posts()->create([
        'body' => $request->body
    ]);

    // or we can use this 
    // $request->user()->posts()->create($request->only('body'));

    return back()->with('success', 'your text posted'); 

}

}
