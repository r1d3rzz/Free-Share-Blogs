<section class="col-md-9 mx-auto my-3">
    <x-card-wrapper>
        <div class="card-header">
            @if ($blog->thumbnail)
            <img src="/storage/{{$blog->thumbnail}}" alt="{{$blog->slug}}" class="card-img-top">
            @else
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2>{{$blog->title}}</h2>
                </div>

                @if (auth()->id() == $blog->user_id)
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
            @endif
        </div>
        <div class="card-body">
            @if ($blog->thumbnail)
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div>
                    <h2>{{$blog->title}}</h2>
                </div>
                @if (auth()->id() == $blog->user_id)
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
            @endif
            <b>
                <p>Auther - <a href="/?user={{$blog->author->username}}"
                        class="link-primary text-decoration-none">{{$blog->author->name}}</a></p>
                <p>Category - <a href="/?category={{$blog->category->slug}}"
                        class="link-success text-decoration-none">{{$blog->category->name}}</a></p>
            </b>

            <p>{!!$blog->body!!}</p>

            <div class="d-flex justify-content-end">
                <form action="/">
                    <button type="submit" class="btn btn-sm btn-outline-danger ">Go Back</button>
                </form>
            </div>
        </div>
        <div class="card-footer text-muted text-center">
            {{$blog->created_at->diffForHumans()}}
        </div>
    </x-card-wrapper>

    <x-comments :blog="$blog" :comments="$blog->comments()->latest()->get()" />

</section>
