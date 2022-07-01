<x-layout>
{{--@foreach ($posts as $post)--}}
{{--    <article>--}}
{{--        <a href="{{ route('posts.show', $post->slug) }}">--}}
{{--            <h1>{{ $post->title }}</h1>--}}
{{--        </a>--}}

{{--        By: <a href="{{ route('authors.show', $post->author->username) }}"><p>{{ $post->author->name }}</p></a> <a href="{{ route('categories.show', $post->category->slug) }}"><p>{{ $post->category->name }}</p></a>--}}

{{--        <div>--}}
{{--            {{ $post->excerpt }}--}}
{{--        </div>--}}
{{--    </article>--}}
{{--@endforeach--}}
    @include('posts._post-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-post-featured-card/>

        <div class="lg:grid lg:grid-cols-2">
            <x-post-card/>
            <x-post-card/>
        </div>

        <div class="lg:grid lg:grid-cols-3">
            <x-post-card/>
            <x-post-card/>
            <x-post-card/>
        </div>
    </main>
</x-layout>
