<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //    $post = Post::find(1);
    //    return $post->tags;
    // $post = Post::with('tags')->find(1);
    // $post = Post::with('tags')->get();
    //    return $post;

        $posts = Post::with('tags')->get();
        foreach($posts as $post){
            echo "<h2>$post->title</h2>";
            echo "<h2>$post->description</h2>";

            foreach($post->tags as $tag){
                echo "$tag->tag_name / ";
            }
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $post = Post::create([
        //     'title'=>'News Title five',
        //     'description'=>'lorem ipsum dolor sit amet consecteure sdklf'
        // ]);

        $post = Post::find(3);

        // attach
        $post->tags()->attach([2,6]);
        // $post->tags()->attach(5);

        // create
        // $post->tags()->create([
        //     "tag_name" =>"Sachin Tendulkar",
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
