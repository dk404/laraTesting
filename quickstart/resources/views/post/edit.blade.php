@extends('layouts.master')

@section('title')

    <title>Edit Post</title>

@endsection

@section('content')


    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/post'>Posts</a></li>
        <li><a href='/post/{{$post->id}}'>{{$post->name}}</a></li>
        <li class='active'>Edit</li>
    </ol>

    <h1>Edit Post</h1>

    <hr/>


    <form class="form" role="form" method="POST" action="{{ url('/post/'. $post->id)  }}">
        <input type="hidden" name="_method" value="patch">
    {{ csrf_field() }}

            <!-- body Form Input -->

        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">

            <label class="control-label">Posts Body</label>

            <textarea class="form-control" name="body" value="{{ $post->body }}"></textarea>

            @if ($errors->has('body'))

                <span class="help-block">
                <strong>{{ $errors->first('body') }}</strong>
                </span>

            @endif

        </div>

        <!-- is_published Form Input -->

        <div class="form-group{{ $errors->has('is_published') ? ' has-error' : '' }}">

            <label class="control-label">Published?</label>


            <select class="form-control" id="is_published" name="is_published">
                <option value="{{ $post->is_published }}">{{ $post->showPublished($post->is_published) }}</option>
                <option value="1">Publish</option>
                <option value="0">Draft</option>
            </select>


            @if ($errors->has('is_published'))

                <span class="help-block">
                <strong>{{ $errors->first('is_published') }}</strong>
                </span>

            @endif

        </div>

    </form>


@endsection