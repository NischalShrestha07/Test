<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
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
            <h2 style="margin-bottom: 25px;">Create Post</h2>

            <a class="btn btn-primary" href="{{route('posts.index')}}">Back</a>

        </div>
        <form action="{{route('posts.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Post Name</label>
                <input type="text" name="name" value="{{old('name')}}" placeholder="Name" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp">

                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Bio</label>
                <input type="text" name="bio" value="{{old('bio')}}" placeholder="Bio" class="form-control"
                    id="exampleInputPassword1">
                @error('bio')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <input type="textarea" name="description" value="{{old('description')}}" placeholder="Description"
                    class="form-control" id="exampleInputPassword1">
                @error('description')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Author</label>
                <input type="text" name="author" value="{{old('author')}}" placeholder="Author" class="form-control"
                    id="exampleInputPassword1">
                @error('author')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Random Note</label>
                <input type="text" name="haha" value="{{old('haha')}}" placeholder="Random Note" class="form-control"
                    id="exampleInputPassword1">
                @error('haha')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</html>