<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<style>
    .container {
        margin-top: 15px;
        padding: 20px;
    }

    .nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>

<body>
    {{-- @if (@session('success'))
    <span class="alert alert-success">{{$message}}</span>
    @endif --}}

    @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    <div class="container card">

        <table class="table">
            <div class="nav">
                <h2 style="margin-bottom: 25px;">Post List</h2>

                <a class="btn btn-primary" href="{{route('posts.create')}}">Create</a>

            </div>

            <thead>
                <tr>
                    <th scope=" col">ID</th>
                    <th scope="col">Post Name</th>
                    <th scope="col">Bio</th>
                    <th scope="col">Description</th>
                    <th scope="col">Author </th>
                    <th scope="col">Random Note</th>
                    <th scope="col">Created At </th>
                    <th scope="col">Updated At </th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->bio}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->author}}</td>
                    <td>{{$item->haha}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td><a class="btn btn-primary" href="{{route('posts.show',$item->id)}}">View</a></td>
                    <td><a class="btn btn-warning" href="{{route('posts.edit',$item->id)}}">Edit</a></td>
                    <td><a class="btn btn-danger" href="{{route('posts.destroy',$item->id)}}">Delete</a></td>
                </tr>
                @endforeach

            </tbody>
        </table>

        {{-- @dd($users) --}}
        @include('posts.addition')
        @include('users.addition')
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</html>