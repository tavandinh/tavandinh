<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function getUserByCommentID($id)
    {
        $comment = Comment::find($id);
        $user = $comment->post->user;
        $users = collect([$user]);
        //dd($users);
        return view('admin.user_list',['users'=> $users]);
    }//
}
