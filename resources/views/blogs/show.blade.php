<x-layout>
    <x-slot name="title">
        {{$blog->title}}
    </x-slot>

    <x-single-blog :blog="$blog" />

    <div class="container">
        <div class="row d-flex">
            @foreach ($randomBlogs as $blog)
            <div class="col-md-4">
                <x-blog-card :blog="$blog" />
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
