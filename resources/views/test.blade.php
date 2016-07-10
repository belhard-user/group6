@foreach($photos as $photo)
    <figure>
        @if($photo->order)
            <figcapture>{{ $photo->order->title }}</figcapture>
        @endif
        <img width="100" src="{{ $photo->path }}" alt="">
    </figure>
@endforeach