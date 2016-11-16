@extends('layouts.master')

@section('title')

    <title>Create a Gadget</title>

@endsection

@section('content')

    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/gadget'>Gadgets</a></li>
        <li class='active'>Create</li>
    </ol>

    <h2>Create a New Gadgets</h2>

    <hr/>

    <form class="form" role="form" method="POST" action="{{ url('/gadget') }}">

    {{ csrf_field() }}

    <!-- name Form Input -->

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label class="control-label">Gadgets Name</label>

            <input type="text" class="form-control" name="name" value="{{ old('name') }}">

            @if ($errors->has('name'))

                <span class="help-block">

                <strong>{{ $errors->first('name') }}</strong>

                </span>

            @endif

        </div>

        <div class="form-group{{ $errors->has('widget_id') ? ' has-error' : '' }}">

           <label for="widget_id">Widget Name:</label>

           <select class="form-control" name="widget_id">

           <option value="">Please Choose One</option>

           @foreach($widgets as $widget)

               <option value="{{ $widget->id }}">{{ $widget->name }}</option>

               @endforeach

               </select>

           @if ($errors->has('widget_id'))

               <span class="help-block">

               <strong>{{ $errors->first('widget_id') }}</strong>

               </span>

           @endif

        </div>


        <div class="form-group">

            <button type="submit" class="btn btn-primary btn-lg">

                Create

            </button>

        </div>

    </form>

@endsection