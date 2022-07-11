<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('user')->get();
        return view('Post.listPost', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Post.createPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData  = $request->validate([
            'title' => 'required|min:5|max:255',
            'content' => 'required|min:10',
        ]);
        $post = Post::create([
            'title' => $validatedData["title"],
            'content' => $validatedData["content"],
            'user_id' => Auth::id(),
        ]);
        return redirect()->to("/posts/". $post->id)->with('message', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $message = 'denied';
        if($post->user_id == Auth::id()){
            $message = 'approved';
        }
        return view('Post.post', compact('post','message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('Post.editPost', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {        
        $validatedData  = $request->validate([
            'title' => 'required|min:5|max:255',
            'content' => 'required|min:10',
        ]);
         $post->update([
            'title' => $validatedData["title"],
            'content' => $validatedData["content"],
        ]);
        return redirect()->to("/posts/". $post->id)->with('message', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->to('/posts');
    }
}
