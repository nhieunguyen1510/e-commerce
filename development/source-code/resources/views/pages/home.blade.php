@extends('layouts.app')

@section('title','Laravel')

@section('sidebar')
    @parent
    <p>This is main page</p>
@endsection
@section('content')
    <button type="button" class="btn btn-danger">Confirm</button>
@endsection