<x-layout>
    <div class="col-md-12 mt-3 mb-4">
        <h1 class="text-8xl mt-0 mb-2">{{ $category->name }}</h1>
        <a href="{{ route('posts.index') }}">Back to all posts</a>
    </div>
    @foreach ($category->posts as $post)
        <article>
            <a href="{{ route('posts.show', $post->slug) }}">
                <h2>{{ $post->title }}</h2>
            </a>

            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout>
