<ul>
    @foreach ($posts as $post)
    <li>
        <a href="{{ route('posts.edit', $post) }}">
            {{ $post->title }}
        </a>
        <img width="60" src="{{ asset('storage/'.$post->image) }}" alt="">
    </li>        
    @endforeach
</ul>

<a href="{{ route('posts.create') }}">Add post</a>