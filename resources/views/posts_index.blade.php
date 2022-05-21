@extends('Layouts.main.app')

<!DOCTYPE html>
<html>

<body>
    @section('content')
        <style>
            .uper {
                margin-top: 40px;
            }

        </style>
        <ul>
            @foreach ($posts as $post)
                <li>TITLE: {{ $post->title }}, cat ID: {{ $post->category->id }},
                    , cat title: {{ $post->category->title }} </li>
            @endforeach
        </ul>


        <ul>
            @foreach ($cats as $cat)
                <li>CAT TITLE: {{ $cat->title }}, posts: {{ $cat->posts_count }} </li>
            @endforeach
        </ul>



    </body>

    </html>
@endsection
