@extends('layouts.main')

@section('title', 'Home - ' . str_replace('_', ' ', config('app.name', 'Laravel')))

@section('content')
  <h1>Hello, world!</h1>
@endsection
