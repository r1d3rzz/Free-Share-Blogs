<x-layout>
    <x-slot name='title'>
        Blogs
    </x-slot>

    @forelse ($blogs as $blog)
    <div class="container">
        <x-blog-card :blog="$blog" />
    </div>
    @empty
    <div class="d-flex justify-content-center">
        <img src="/svg/Search-rafiki.png" class="img-fluid" alt="Sample image" width="650">
    </div>
    <div class="text-center mb-3 display-5 text-muted">Ups!... no results found</div>
    @endforelse

    @if (count($blogs) > 0)
    {{$blogs->links()}}
    @endif
</x-layout>
