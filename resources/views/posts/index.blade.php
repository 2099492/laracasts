<x-layout>
@foreach ($posts as $post)
    <article>
        <a href="{{ route('posts.show', $post->slug) }}">
            <h1>{{ $post->title }}</h1>
        </a>

        <div>
            {{ $post->excerpt }}
        </div>
    </article>
@endforeach
</x-layout>
