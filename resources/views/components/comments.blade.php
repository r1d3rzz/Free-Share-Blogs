@props(['blog','comments'])

<section class="comments">

    <x-card-wrapper class="col-md-7 mx-auto">
        <div class="card-header bg-primary text-light d-flex justify-content-between">
            <div>Leave Your Comments Here</div>
            @if (count($comments) > 0)
            <div>Comments ({{count($comments)}})</div>
            @endif
        </div>
        <div class="card-body">
            @auth
            <form action="/blogs/{{$blog->id}}/comments" method="POST">@csrf
                <textarea name="comments" class="form-control mb-2" rows="5"
                    placeholder="Write Here...">{{old('comments')}}</textarea>
                <x-error name="comments" />
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-sm btn-primary">Comments</button>
                </div>
            </form>
            @else
            <div class="text-center my-2 text-muted">
                If you want to comments this Blogs.<a href="/user/login" class="text-decoration-none">Login</a> First.
            </div>
            @endauth
        </div>
        @if (count($comments) > 0)
        <div class="card-footer bg-secondary" style="height: 200px; overflow:auto;">

            @foreach ($comments as $comment)
            <x-card-wrapper>
                <div class="card-header d-flex align-items-center">
                    @if ($comment->author->avatar != null)
                    <img src="/storage/{{$comment->author->avatar}}"
                        style="width: 40px; height: 40px; background-position: center;"
                        alt="{{$comment->author->username}}" class="rounded-circle me-2">
                    @endif
                    <div>{{$comment->author->name}}</div>
                </div>
                <div class="card-body">
                    <p>{{$comment->body}}</p>
                </div>
                <div class="card-footer text-center">
                    <span class="text-muted">{{$comment->created_at->diffForHumans()}}</span>
                </div>
            </x-card-wrapper>
            @endforeach

        </div>
        @endif
    </x-card-wrapper>

</section>
