<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tag = Tag::with("posts")->find(1);
        // return $tag;

        // $tag = Tag::with("posts")->with("videos")->find(1);
        // return $tag;

        // $tag = Tag::with(["posts","videos"])->find(1);
        // return $tag;

        // $tag = Tag::with(["posts:title,description","videos"])->find(1);
        // return $tag;

        // show in view
        $tag = Tag::with(["posts:title,description","videos"])->find(1);
        echo "<h1>All Posts:</h1>";
        foreach($tag->posts as $post){
            echo "<h2>$post->title</h2>";
            echo "<p>$post->description</p>";
            echo "<hr>";
        }

        echo "<h1>All Video:</h1>";
        foreach($tag->videos as $video){
            echo "<h2>$video->title</h2>";
            echo "<p>$video->url</p>";
            echo "<hr>";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
