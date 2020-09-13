@include('layouts.header');

<div class="content">
    <div class="container">
        <h1>User List</h1>

        <p><a href="{{ route('admin.user.index') }}" class="btn btn-primary">User List</a> 

       @if (empty($users))
            <p class="text-danger">No Data yes.</p>
        @else
        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>Comment</th>
                <th>AllInfo</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Password</th>
                <th>birthday</th>
                <th>status</th>
            </tr>
           @foreach($users as $key => $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><a href="{{ route('admin.user.comment',$user->id) }}" class="btn btn-primary">Comment</a> </td>
                <td><a href="{{ route('admin.user.allInfo',$user->id) }}" class="btn btn-primary">All</a> </td>
                <td>{{$user->name}}</td>
                <td>{{$user->age}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->birthday}}</td>
                <td>{{$user->status}}</td>
            </tr>
           @endforeach
        </table>
       @endif
    </div>
</div>

@include('layouts.footer');