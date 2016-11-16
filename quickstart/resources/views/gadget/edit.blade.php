@extends('layouts.master')

@section('title')

<title>Edit Gadget</title>

@endsection

@section('content')


<ol class='breadcrumb'>
    <li><a href='/'>Home</a></li>
    <li><a href='/gadget'>Gadgets</a></li>
    <li><a href='/gadget/{{$gadget->id}}'>{{$gadget->name}}</a></li>
    <li class='active'>Edit</li>
</ol>

<h1>Edit Gadget</h1>

<hr/>


<form class="form" role="form" method="POST" action="{{ url('/gadget/'. $gadget->id)  }}">

    <input type="hidden" name="_method" value="patch">

    {{ csrf_field() }}

    <!-- Gadget Form Input -->

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

        <label class="control-label">Gadget Name</label>

        <input type="text" class="form-control" name="name" value="{{ $gadget->name }}">

        @if ($errors->has('name'))

        <span class="help-block">

        <strong>{{ $errors->first('name') }}</strong>

        </span>

        @endif

    </div>

    <!-- Widget Form Select -->

    <div class="form-group{{ $errors->has('widget_id') ? ' has-error' : '' }}">

        <label for="widget_id">Widget Name:</label>

        <select class="form-control" name="widget_id">

            <option value="{{ $oldId }}">{{ $oldValue }}</option>

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
            Edit
        </button>
    </div>

</form>


@endsection