<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$blog->title}}</title>
</head>

<body>

    <div class="p-2 my-2 border bg-success mx-auto w-50">
        <h1>{{$blog->title}}</h1>
        <h4>Created at - {{$blog->created_at->diffForHumans()}}</h4>
        <h3>Auther - {{$blog->author->name}}</h3>
        <h3>Category - {{$blog->category->name}}</h3>
        <p>{{$blog->body}}</p>

        <div class="d-flex justify-content-end">
            <form action="/">
                <button type="submit" class="btn btn-sm btn-warning ">Go Back</button>
            </form>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        @foreach ($randomBlogs as $blog)
        <div class="bg-secondary w-25 h-25 p-2 m-3 text-center">
            <h1>{{$blog->title}}</h1>
            <h4>Created at - {{$blog->created_at->diffForHumans()}}</h4>
            <h3>Auther - {{$blog->author->name}}</h3>
            <h3>Category - {{$blog->category->name}}</h3>
            <p>{{$blog->intro}}</p>

            <div class="d-flex justify-content-end">
                <form action="/blogs/{{$blog->slug}}">
                    <button type="submit" class="btn btn-sm btn-warning ">Read More</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

</body>

</html>
