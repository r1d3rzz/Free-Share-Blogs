@props(['blog'])

<section>

    <x-card-wrapper>
        <div class="card-header">
            <h2>{{$blog->title}}</h2>
        </div>
        <div class="card-body">
            <b>
                <p>Auther - {{$blog->author->name}}</p>
                <p>Category - {{$blog->category->name}}</p>
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
