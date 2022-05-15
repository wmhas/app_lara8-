<!DOCTYPE html>

<html>
<body>


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
