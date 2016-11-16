<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        return view('post.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        return view('post.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $this->validate($request, [

            'name' => 'required|unique:posts|string|max:30',
            'body' => 'required|string|max:1024',
            'is_published' => 'required|boolean'

        ]);

        $slug = str_slug($request->name, "-");

        $post = Post::create([
            'name' => $request->name,
            'body' => $request->body,
            'is_published' => $request->is_published,
            'slug' => $slug,
        ]);
        $post->save();

        alert()->success('Congrats!', 'Ты создал post');
        return Redirect::route('post.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('post.show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('post.edit', compact('post'));

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
        $this->validate($request, [

            'name' => 'required|string|max:40|unique:posts,name,' .$id,
            'body' => 'required|string|max:1024',
            'is_published' => 'required|boolean'

        ]);

        $post = Post::findOrFail($id);

        $slug = str_slug($request->name, "-");

        $post->update([
            'name' => $request->name,
            'body' => $request->body,
            'is_published' => $request->is_published,
            'slug' => $slug,
        ]);


        alert()->success('Congrats!', 'Супер всё прошло успешно');

        return Redirect::route('post.show', ['post' => $post, 'slug' => $slug]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        Post::destroy($id);

        alert()->overlay('Attention!', 'You deleted a Post', 'error');

        return Redirect::route('post.index');

    }
}