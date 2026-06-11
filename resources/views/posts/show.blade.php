<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/index.css') }}">
</head>
<style>
    .container {
        padding: 15px;
        margin-top: 15px;
        /* background-color: green; */
    }

    .nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>

<body>

    <div class="container card">
        <div class="nav">
            <h2 style="margin-bottom: 25px;">Post</h2>

            <a class="btn btn-primary" href="{{route('posts.index')}}">Back</a>

        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Post Name</h5>
                <p class="card-text">{{$posts->name}}</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Bio</h5>
                <p class="card-text">{{$posts->bio}}</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="card-text">{{$posts->description}}</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Author</h5>
                <p class="card-text">{{$posts->motherName}}</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Random Note</h5>
                <p class="card-text">{{$posts->haha}}</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Created At</h5>
                <p class="card-text">{{$posts->created_at}}</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Updated At</h5>
                <p class="card-text">{{$posts->updated_at}}</p>
            </div>
        </div>
        <a href="{{route('posts.edit',$posts->id)}}" class="btn btn-warning">Edit</a>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</html>