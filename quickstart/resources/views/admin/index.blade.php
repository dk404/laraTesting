@extends('layouts.master')

@section('title')
   The Admin Page
@endsection

@section('content')
    <h1>Admin</h1>
    @include('admin.grid')
@endsection