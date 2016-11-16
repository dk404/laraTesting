@extends('layouts.master')

@section('title')

    <title>Posts</title>

    @endsection

@section('content')

    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li class='active'>Posts</li>
    </ol>

    <h2>Posts</h2>

    <hr/>

    <post-grid></post-grid>

    <div> <a href="post/create">
            <button type="button" class="btn btn-lg btn-primary">
                Create New
            </button></a>
    </div>


    @endsection