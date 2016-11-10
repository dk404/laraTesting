@extends('layouts.master')

@section('title')
    Create a Marketing Image
@endsection

@section('content')

    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/marketing-image'>Marketing Images</a></li>
        <li class='active'>Create</li>
    </ol>

    <h2>Create a New Marketing Image</h2>

    <hr/>

    <form class="form" role="form" method="POST" action="{{ url('/marketing-image') }}" enctype="multipart/form-data">


        {{ csrf_field() }}

                <!-- image_name Form Input -->

        <div class="form-group{{ $errors->has('image_name') ? ' has-error' : '' }}">

            <label class="control-label">Image Name</label>

            <input type="text" class="form-control" name="image_name" value="{{ old('image_name') }}">

            @if ($errors->has('image_name'))

                <span class="help-block">
                <strong>{{ $errors->first('image_name') }}</strong>
                </span>

            @endif

        </div>

        <!-- is_active Form Input -->

        <div class="form-group">
            <label class=" control-label">Is Active
            </label>
            <div>
                <input type="checkbox"  name="is_active">
            </div>
        </div>

        <!-- is_featured Form Input -->

        <div class="form-group">
            <label class=" control-label">Is Featured
            </label>
            <div>
                <input type="checkbox"  name="is_featured">
            </div>
        </div>

        <!-- image file Form Input -->

        <div class="form-group">
            <label class="control-label">Primary Image
            </label>

            <input type="file" name="image" id="image">
        </div>


        <div class="form-group">

            <button type="submit" class="btn btn-primary btn-lg">

                Create

            </button>

        </div>

    </form>

@endsection