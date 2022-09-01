<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="app.css">
    <title>{{$title}}</title>
</head>

<body class="bg-light" id="body">

    <div class="container">

        <x-nav />

        <x-noti_banner name="success" color="success" />

        <x-noti_banner name="login" />

        <x-noti_banner name="updated" />

        <x-noti_banner name="logout" color="danger" />

        {{$slot}}

        <x-footer />

    </div>


    <script src="https://kit.fontawesome.com/2c87f61656.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
