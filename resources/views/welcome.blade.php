@extends('layouts.app')

@section('title', 'Page Title')
@section('nav')
  @endsection
@section('sidebar')
  @parent

  <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
  <p>This is my body content.</p>

  <div id="example"></div>
@endsection
