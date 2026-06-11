<div class="container mt-5">
    <table class="table">
        <div class="nav">
            <h2 style="margin-bottom: 25px;">Profile List</h2>

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
            @foreach($profiles as $item)
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