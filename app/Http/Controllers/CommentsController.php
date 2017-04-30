<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Events\CommentSent;

class CommentsController extends Controller
{

	public function __construct()

    {

        $this->middleware('auth');

    }

    public function fetchComments()

    {

      return Comment::with('user')->get();

    }
    

    public function store(Post $post)

    {

      $this->validate(request(), ['body' => 'required|min:2']);

      $comment =  $post->Comment::create([

                        'body' => request('body'),
                        'post_id' => $post->id,
                        'user_id' => auth()->id()

                  ]);

    $comment = Comment::where('id', $comment->id)->with('user')->first();


     broadcast(new CommentSent($comment))->toOthers();
	
	// return back();

     return $comment;

    }
}
