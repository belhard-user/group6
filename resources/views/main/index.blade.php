@extends('layouts.main')

@section('content')
@foreach($lastOrders as $order)
    <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
            <img src="http://placehold.it/320x150" alt="">
            <div class="caption">
                <h4 class="pull-right">{{ $order->price }} руб</h4>
                <h4><a href="{{ route('view-notice', ['id' => $order->id]) }}">{{ $order->title }}</a>
                </h4>
                <p>{{ $order->desc }}</p>
            </div>
            <div class="ratings">
                <p class="pull-right">15 reviews</p>
                <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                </p>
            </div>
        </div>
    </div>
@endforeach
@endsection