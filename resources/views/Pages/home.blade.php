
@extends('layouts.app')

@section('content')
  <div class='container mt-5'>
    <h1><?php echo $title; ?></h1>
    <h2>This is home:  {{$title}}</h2>
    <p>This is the laravel application from the "Laravel From Scratch" Youtube series</p>
  </div>
@endsection

