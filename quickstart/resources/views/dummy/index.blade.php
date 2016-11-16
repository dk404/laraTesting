@extends('layouts.master')

@section('title')

    <title>Dummies</title>

    @endsection

@section('content')

    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li class='active'>Dummies</li>
    </ol>

    <h2>Dummies</h2>

    <hr/>

    <dummy-grid></dummy-grid>

    <div> <a href="dummy/create">
            <button type="button" class="btn btn-lg btn-primary">
                Create New
            </button></a>
    </div>


    @endsection