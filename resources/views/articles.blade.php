@extends('Layouts.main.app')

@section('content')

    <h1>articles</h1>

    <div>

        <ul>
            @foreach ($articles as $article)
                <li>name: {{ $article->name }}, slug: {{ $article->slug }} </li>
            @endforeach
        </ul>

    </div>
@endsection
