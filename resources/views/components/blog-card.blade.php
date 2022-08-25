@props(['blog'])

<section>

    <x-card-wrapper>
        <div class="card-header">
            <h2>{{$blog->title}}</h2>
        </div>
        <div class="card-body">
            <b>
                <p>Auther - <a href="/?user={{$blog->author->username}}"
                        class="link-primary text-decoration-none">{{$blog->author->name}}</a></p>
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
