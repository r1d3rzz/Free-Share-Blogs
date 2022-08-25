<x-layout>
    <x-slot name='title'>
        Blogs
    </x-slot>

    @forelse ($blogs as $blog)
    <div class="container">
        <x-blog-card :blog="$blog" />
    </div>
    @empty
    <div class="p-5 m-5 text-center text-muted display-5">Empty Blog</div>
    @endforelse

    @if (count($blogs) > 0)
    {{$blogs->links()}}
    @endif
</x-layout>
