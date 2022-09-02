<x-layout>
    <x-slot name="title">
        Your Blogs
    </x-slot>

    @forelse ($blogs as $blog)
    <div class="container">
        <section>

            <x-card-wrapper>
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <h2>{{$blog->title}}</h2>
                    </div>
                    @if (auth()->id() == $blog->author->id)
                    <div class="d-flex">
                        <div class="mx-1">
                            <form action="/user/blog/{{$blog->slug}}/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                        <div class="mx-1">
                            <form action="/blog/{{$blog->slug}}/edit">
                                <button type="submit" class="btn btn-sm btn-outline-warning">Edit</button>
                            </form>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="card-body">
                    <b>
                        <p>Auther - <a href="/?user={{$blog->author->username}}"
                                class="link-primary text-decoration-none">{{ucwords($blog->author->name)}}</a></p>
                        <p>Category - <a href="/?category={{$blog->category->slug}}"
                                class="link-success text-decoration-none">{{$blog->category->name}}</a></p>
                    </b>
                    <p>{{$blog->intro}}</p>

                    <div class="d-flex justify-content-end">
                        <form action="/blogs/{{$blog->slug}}">
                            <button type="submit" class="btn btn-sm btn-outline-primary ">Read More</button>
                        </form>
                    </div>
                </div>

                <div class="card-footer text-muted text-center">
                    {{$blog->created_at->diffForHumans()}}
                </div>
            </x-card-wrapper>

        </section>

    </div>
    @empty
    <div class="d-flex justify-content-center">
        <img src="/svg/Search-rafiki.png" class="img-fluid" alt="Sample image" width="650">
    </div>
    <div class="text-center mb-3 display-5 text-muted">Ups!... no Blogs found</div>
    @endforelse

</x-layout>
