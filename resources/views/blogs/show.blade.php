<x-layout>
    <x-slot name="title">
        {{$blog->title}}
    </x-slot>

    <x-single-blog :blog="$blog" />

    <div class="d-flex justify-content-center ">
        @foreach ($randomBlogs as $blog)
        <x-blog-card :blog="$blog" />
        @endforeach
    </div>
</x-layout>
