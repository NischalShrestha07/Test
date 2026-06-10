<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
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
                <h2 style="margin-bottom: 25px;">Users List</h2>

                <a class="btn btn-primary" href="{{route('profile.create')}}">Create</a>

            </div>

            <thead>
                <tr>
                    <th scope=" col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Father Name </th>
                    <th scope="col">Mother Name </th>
                    <th scope="col">Created At </th>
                    <th scope="col">Updated At </th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->age}}</td>
                    <td>{{$item->fatherName}}</td>
                    <td>{{$item->motherName}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td><a class="btn btn-primary" href="{{route('profile.show',$item->id)}}">View</a></td>
                    <td><a class="btn btn-warning" href="{{route('profile.edit',$item->id)}}">Edit</a></td>
                    <td><a class="btn btn-danger" href="{{route('profile.delete',$item->id)}}">Delete</a></td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</html>