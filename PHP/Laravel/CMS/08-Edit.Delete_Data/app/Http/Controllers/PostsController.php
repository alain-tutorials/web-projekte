<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //$posts =  DB::select('SELECT * FROM posts');
         //return Post::where('title', 'Post Two')->get();
        //$posts = Post::orderBy('title','desc')->get();
         $posts = Post::orderBy('created_at','desc')->paginate(10);
        // $posts = Post::all()->paginate(1);
       
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // exigences a respecter
        $anforderungen = [
            'title' => 'required',
            'body' => 'required'
        ];

       $this->validate($request, $anforderungen);

       // create Post
       $post = new Post;
       $post->title = $request->input('title');
       $post->body = $request->input('body');
       $post->save();

       return redirect('/posts')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $post =  Post::find($id);
       return View('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =  Post::find($id);
        return View('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // exigences a respecter
        $anforderungen = [
            'title' => 'required',
            'body' => 'required'
        ];

       $this->validate($request, $anforderungen);

       // create Post
       $post = Post::find($id);
       $post->title = $request->input('title');
       $post->body = $request->input('body');
       $post->save();

       return redirect('/posts')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $post = Post::find($id);
       $post->delete();
       return redirect('/posts')->with('success','Post Removed');
    }
}
