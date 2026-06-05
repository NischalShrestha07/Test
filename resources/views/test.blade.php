<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>


<body>


    <div class="container">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <table class="card">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Email Verified AT </th>
            {{-- <th>Salary</th>
            <th>Age</th>
            <th>Status</th> --}}
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
        </thead>
        <tbody>
            <tr>
                @foreach($user as $item)
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->email_verified_at}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
                <td><button>Edit</button></td>
                <td><button>Delete</button></td>

                @endforeach
            </tr>


        </tbody>
    </table>

    <table>
        <thead>
            <th>Name</th>
            <th>Price </th>
            <th>Weight</th>
        </thead>
        <tbody>
            <tr>
                @foreach ($products as $item)
                <td>{{$item}}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</html>