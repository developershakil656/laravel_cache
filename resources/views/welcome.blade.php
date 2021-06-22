<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body class="antialiased">
    <div class="container">
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{$post->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}} {{$post->id}}</h5>
                    <p class="card-text">{{$post->content}}</p>
                    <a href="#" class="btn btn-primary">{{$post->user->name}}</a>
                </div>
            </div>
            </div>
        @endforeach
    </div>
    </div>
</body>

</html>