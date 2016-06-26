@extends('test')

@section('content')
<h2>People i like</h2>
<ul>
    @forelse($names as $name)
        <li>{{ $name }}</li>
    @empty
        <h2>Их все убили</h2>
    @endforelse
</ul>
@endsection

@section('title', 'Содержимое тайтла')

@section('css')
    @parent
    <link rel="stylesheet" href="/css/style.css">
@stop