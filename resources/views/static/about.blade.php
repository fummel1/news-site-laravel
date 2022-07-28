@extends('layout.main')

@section('page-title')
{{ $title }}
@endsection

@section('content')
    <div class="block">
        <h1>Про нас</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus aspernatur quibusdam repellat eos fuga rerum voluptas earum, minus ex saepe fugit! Porro modi rerum sed numquam, iusto voluptates assumenda consectetur?</p>

    @if(count($params) > 0)
        <ul>
            @foreach($params as $el)
            <li>{{ $el }}</li>
            @endforeach
        </ul>
    @endif
    </div>
@endsection