<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;


class PostsController extends Controller
{
     public function __construct(){
      /*setlocale(LC_TIME, 'Spanish');*/
    }


    public function index()
    {
    	
    	$posts = Post::orderBy('id', 'desc')->paginate(5);
    	return view('posts.index')->with(['posts'=>$posts]);
    }


    public function show($postId)
    {
    	$post = Post::find($postId);
    	
    	return view('posts.show')->with(['post'=>$post]);
    }

     public function create()
    {
        
       
        return view('posts.create');
    }

     public function store(CreatePostRequest $request)
    {
        
       

        /*$this->validate($request,[
            'title' =>'required',
            'url' =>'required|url'

        ]);*/

         $post = Post::create($request->only('title', 'description', 'url'));
        
         return redirect()->route('posts_path');
              
    }
}
