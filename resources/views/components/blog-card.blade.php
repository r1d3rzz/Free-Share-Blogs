@props(['blog'])

<section>

    <x-card-wrapper>
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <h2>{{$blog->title}}</h2>
            </div>
            @if (auth()->id() == $blog->author->id)
            <div class="d-flex">
                <div class="mx-1">
                    <form action="/blog/{{$blog->slug}}/delete" method="POST">
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
