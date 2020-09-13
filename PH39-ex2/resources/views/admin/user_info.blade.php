@include('layouts.header');

<div class="content">
    <div class="container">
    <h1>Info of {{$user->name}}</h1>

        <p><a href="{{ route('admin.user.index') }}" class="btn btn-primary">User List</a> 

       @if (empty($user))
            <p class="text-danger">No Data yes.</p>
        @else
            @if (!empty($user->profile))
            <h2>Profile of {{$user->name}}</h2>
            <div class="row">
                <label class="col-sm-1 text-primary font-weight-bold">Address</label>
                <div class="col-sm-11">
                    {{$user->profile->address}}
                </div>
            </div>
            <div class="row">
                <label class="col-sm-1 text-primary font-weight-bold">Tel</label>
                <div class="col-sm-11">
                    {{$user->profile->tel}}
                </div>
            </div>
            <div class="row">
                <label class="col-sm-1 text-primary font-weight-bold">Province</label>
                <div class="col-sm-11">
                    {{$user->profile->province}}
                </div>
            </div>
            @endif
        <h2>Post list of {{$user->name}}</h2>
        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>Comment</th>
            </tr>
           @foreach($user->comments as $key => $comment)
            <tr>
                <td>{{$comment->id}}</td>
                <td>{{$comment->content}}</td>
            </tr>
           @endforeach
        </table>
        <h2>Comment list of {{$user->name}}</h2>
        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>Comment</th>
            </tr>
           @foreach($user->comments as $key => $comment)
            <tr>
                <td>{{$comment->id}}</td>
                <td>{{$comment->content}}</td>
            </tr>
           @endforeach
        </table>
       @endif
    </div>
</div>

@include('layouts.footer');