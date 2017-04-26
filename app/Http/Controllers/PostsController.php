<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Mail\BlogPost;
use App\User;

class PostsController extends Controller
{

    public function __construct()

    {

        $this->middleware('auth')->except(['index', 'show']);

    }


    public function index()

    {

    	$posts = Post::latest()->get();

    	return view('posts.index', compact('posts'));

    }


    public function show(Post $post)

    {


    	return view('posts.show', compact('post'));

    }


    public function create()

    {

    	return view('posts.create');

    }


    public function store(User $user)

    {

    	$this->validate(request(), [

    		'title' => 'required|max:50',

    		'body' => 'required'

    	]);

       $post = Post::create([
    
          'title' => request('title'),
          'body' => request('body'),
          'user_id' => auth()->id()

        ]);

        \Mail::to($user->get())->send(new BlogPost($post));

    	return redirect('/');

    }


    public function edit(Post $post)

    {
       // $post = Post::find($id);

        return view('posts.edit', compact('post'));


    }

    public function update(Request $request, Post $post)

    {


        $this->validate(request(), [

            'title' => 'required|max:40',

            'body' => 'required'

        ]);

       // $post = Post::find($id);

       $post->title = $request->title;

       $post->body = $request->body;

       $post->save();

        return redirect('/');

    }

    public function destroy(Post $post)

    {

       // $post = Post::find($id);

        $post->delete();

        return redirect('/');

    }

}
