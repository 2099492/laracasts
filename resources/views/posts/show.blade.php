<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-4 mb-4">{{ $post->title }}</h1>
                By: <a href="{{ route('authors.show', $post->author->username) }}"><p>{{ $post->author->name }}</p></a> <a href="{{ route('categories.show', $post->category->slug) }}"><p>{{ $post->category->name }}</p></a>
                <p>{{ $post->body }}</p>
            </div>
            <div class="col-md-12 mt-3">
                <a href="{{ route('posts.index') }}">Back to all posts</a>
            </div>
        </div>
    </div>
</x-layout>
