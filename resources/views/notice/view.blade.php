@extends('layouts.main')

@section('title', $order->title)



@section('content')
    <div class="row">
        <div class="col-md-3">
            <h2>{{$order->title}} @ {{ $order->price }}.руб</h2>
            <p>{{ $order->desc }}</p>
        </div>
        <div class="col-md-9">
            @forelse($order->photo as $photo)
                <img style="width: 100%" src="{{ $photo->path }}" alt="{{ $order->title }}">
            @empty
                <p>Загрузите картинки</p>
            @endforelse

            @if($order->photo->isEmpty())
                <hr>
                <form action="{{ route('photo-notice', ['id' => $order->id]) }}"
                      class="dropzone"
                      id="my-awesome-dropzone">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            @endif
        </div>
    </div>

@endsection

@section('footer.js')
    <script src="/js/dropzone.js"></script>
@stop

@section('head.css')
    @parent
    <link rel="stylesheet" href="/css/dropzone.css">
@stop