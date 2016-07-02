@extends('test')

@section('content')
<h2>People i like</h2>

<form method="post" action="{{ route('test.form') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="some_variable2">
    <input type="text" name="some_variable3">
    <input type="text" name="some_variable4">
    <input type="text" name="some_variable5">
    <input type="text" name="some_variable6">
    <input type="text" name="some_variable7">
    <input type="submit">
</form>

@endsection

@section('title', 'Содержимое тайтла')

@section('css')
    @parent
    <link rel="stylesheet" href="/css/style.css">
@stop