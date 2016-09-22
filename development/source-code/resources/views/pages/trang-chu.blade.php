@extends('layouts.main')

@section('title','Laravel')

@section('sidebar')
    @parent
    <p>This is main 2 page</p>
@endsection
@section('content')
    <button type="button" class="btn btn-danger">Confirm</button>
@endsection