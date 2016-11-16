@extends('layouts.master')

@section('title')

    <title>Post</title>

@endsection

@section('content')

    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/post'>Posts</a></li>
        <li><a href='/post/{{ $post->id }}'>{{ $post->name }}</a></li>
    </ol>

    <h1>Post Details</h1>

    <hr/>

    <div class="panel panel-default">

        <!-- Table -->
        <table class="table table-striped">
            <tr>

                <th>Id</th>
                <th>Name</th>
                <th>Published?</th>
                <th>Body</th>
                <th>Date Created</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>


            <tr>
                <td>{{ $post->id }} </td>
                <td> <a href="/post/{{ $post->id }}/edit">
                        {{ $post->name }}</a></td>
                <td>{{ $post->showPublished($post->is_published) }} </td>
                <td>{{ $post->body }} </td>
                <td>{{ $post->created_at }}</td>

                <td> <a href="/post/{{ $post->id }}/edit">

                        <button type="button" class="btn btn-default">Edit</button></a></td>

                <td>

                    <div class="form-group">

                        <form class="form" role="form" method="POST"
                              action="{{ url('/post/'. $post->id) }}">

                            <input type="hidden" name="_method" value="delete">

                            {{ csrf_field() }}

                            <input class="btn btn-danger" Onclick="return ConfirmDelete();"
                                   type="submit" value="Delete">

                        </form>

                    </div>

                </td>

            </tr>

        </table>


    </div>

@endsection

@section('scripts')

    <script>

        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }

    </script>

@endsection