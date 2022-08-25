<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Blogs</title>
</head>

<body class="bg-light">

    @foreach ($blogs as $blog)
    <div class="p-2 my-2 border bg-success mx-auto w-50">
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

</body>

</html>
