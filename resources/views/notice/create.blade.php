@extends('layouts.main')

@section('title', 'Добавить товар в барахолку')

@section('head.css')
    @parent
    <link rel="stylesheet" href="/css/addForm.css">
@stop

@section('content')
    <div class="container">

        <div class="col-md-5 col-md-offset-1">
            <form action="{{ route('store-notice') }}" method="post" role="form"  id="floating-label">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label class="control-label">Название товара</label>
                    <input name="title" type="text" class="form-control" />
                </div>

                <div class="form-group">
                    <label class="control-label">Описание товара</label>
                    <textarea name="desc" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label class="control-label">Цена</label>
                    <input name="price" type="number" class="form-control" />
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>
        </div>

    </div>
@endsection

@section('footer.js')
    @parent
    <script>
        $('.form-control').on('focus blur', function (e) {
            $(this).parents('.form-group').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
        }).trigger('blur');
    </script>
@stop