<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
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
            <h2 style="margin-bottom: 25px;">User</h2>

            <a class="btn btn-primary" href="{{route('profile.index')}}">Back</a>

        </div>
        {{-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <span>{{$profile->name}}</span>
        </div> --}}
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Name</h5>
                <p class="card-text">{{$profile->name}}</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Age</h5>
                <p class="card-text">{{$profile->age}}</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Father Name</h5>
                <p class="card-text">{{$profile->fatherName}}</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Mother Name</h5>
                <p class="card-text">{{$profile->motherName}}</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Created At</h5>
                <p class="card-text">{{$profile->created_at}}</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Updated At</h5>
                <p class="card-text">{{$profile->updated_at}}</p>
            </div>
        </div>
        <a href="{{route('profile.edit',$profile->id)}}" class="btn btn-warning">Edit</a>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</html>