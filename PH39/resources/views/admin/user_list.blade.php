@include('layouts.header');

<div class="content">
    <div class="container">
        <h1>User List</h1>

        <p><a href="{{ route('admin.user.index') }}" class="btn btn-primary">User List</a> 
        <a href="{{ route('admin.user.findUserAgeGreaterThan20') }}" class="btn btn-primary">User age>20</a> 
        <a href="{{ route('admin.user.findUserBirthdayMonth3') }}" class="btn btn-primary">User birthday month = 3</a> 
        <a href="{{ route('admin.user.findUserProvinceReidfort') }}" class="btn btn-primary">User Province=Reidfort</a> 
        <a href="{{ route('admin.user.updateUserAgeGreaterThan18') }}" class="btn btn-primary">Update User age >18</a></p>

       @if (empty($users))
            <p class="text-danger">No Data yes.</p>
        @else
        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Password</th>
                <th>birthday</th>
                <th>status</th>
                <th>Address</th>
                <th>Tel</th>
                <th>Province</th>
            </tr>
           @foreach($users as $key => $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->age}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->birthday}}</td>
                <td>{{$user->status}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->tel}}</td>
                <td>{{$user->province}}</td>
            </tr>
           @endforeach
        </table>
       @endif
    </div>
</div>

@include('layouts.footer');