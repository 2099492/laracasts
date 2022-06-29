<x-layout>
    @foreach ($posts as $post)
        <article>
            <a href="{{ route('posts.show', $post->slug) }}">
                <h1>{{ $post->title }}</h1>
            </a>

            By: <a href="{{ route('authors.show', $post->author->username) }}"><p>{{ $post->author->name }}</p></a><a href="{{ route('categories.show', $post->category->slug) }}"><p>{{ $post->category->name }}</p></a>

            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout>
