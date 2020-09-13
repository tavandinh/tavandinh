@include('layouts.header');

<div class="content">
    <div class="container">
    <h1>Comment List of {{$user->first()->name}}</h1>

        <p><a href="{{ route('admin.user.index') }}" class="btn btn-primary">User List</a> 

       @if (empty($comments))
            <p class="text-danger">No Data yes.</p>
        @else
        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>Comment</th>
                <th>User</th>
            </tr>
           @foreach($comments as $key => $comment)
            <tr>
                <td>{{$comment->id}}</td>
                <td>{{$comment->content}}</td>
                <td><a href="{{ route('admin.comment.user',$comment->id) }}" class="btn btn-primary">User</a> </td>
            </tr>
           @endforeach
        </table>
       @endif
    </div>
</div>

@include('layouts.footer');