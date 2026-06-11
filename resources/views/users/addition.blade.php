<div class="container mt-5">
    <table class="table">
        <div class="nav">
            <h2 style="margin-bottom: 25px;">Users List</h2>

            <a class="btn btn-primary" href="{{route('profile.create')}}">Create</a>

        </div>

        <thead>
            <tr>
                <th scope=" col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">EmailVerified at </th>
                <th scope="col">Password </th>
                <th scope="col">Created At </th>
                <th scope="col">Updated At </th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->email_verified_at}}</td>
                <td>{{$item->password}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
                <td><a class="btn btn-primary" href="">View</a></td>
                <td><a class="btn btn-warning" href="">Edit</a></td>
                <td><a class="btn btn-danger" href="">Delete</a></td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>