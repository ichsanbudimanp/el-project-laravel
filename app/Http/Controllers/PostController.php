<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Storage::get('public/posts.txt');
        $posts = explode("\n", $posts);
        
        $view_data = [
            'posts' => $posts
        ];

        return view('posts.index', $view_data);
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
    public function show(string $id)
    {
        $posts = Storage::get('public/posts.txt');
        $posts = explode("\n", $posts);
        $selectedPost = Array();

        foreach($posts as $post){
            $post = explode(",", $post);
            if($post[0] == $id){
                $selectedPost = $post;
            }
        }

        $view_post = [
            'post' => $selectedPost
        ];


        return view('posts.detail', $view_post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
