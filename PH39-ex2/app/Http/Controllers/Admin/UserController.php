<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\User;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('admin.user_list',['users'=> $users]);
    }

    public function getCommentByUserID($id)
    {
        $user = User::find($id);
        $comments = $user->comments;
        return view('admin.user_comment_list',['user'=> $user,'comments'=>$comments]);
    }
    
    public function getAllInformationOfUser($id)
    {
        $user = User::with('profile','posts','comments')->find($id);
        //$user = User::with('profile')->find($id);
        //dd($user->profile);
        return view('admin.user_info',['user'=> $user]);
    }
}
