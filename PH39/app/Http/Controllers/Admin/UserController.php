<?php

namespace App\Http\Controllers\Admin;

use DB;
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
        $users = DB::table('users')->join('profiles','users.id','=','profiles.user_id')->orderBy('users.id', 'DESC')->select('users.*','profiles.address','profiles.tel','profiles.province')->get()->toArray();
        // dd($users);
        return view('admin.user_list',['users'=> $users]);
        //return $users;
    }

    public function findUserAgeGreaterThan20()
    {
        $users = DB::table('users')->join('profiles','users.id','=','profiles.user_id')->where('age','>',20)->select('users.*','profiles.address','profiles.tel','profiles.province')->orderBy('users.id', 'DESC')->get()->toArray();
        // dd($users);
        return view('admin.user_list',['users'=> $users]);
        //return $users;
    }

    public function findUserBirthdayMonth3()
    {
        $users = DB::table('users')->join('profiles','users.id','=','profiles.user_id')->whereMonth('birthday',3)->select('users.*','profiles.address','profiles.tel','profiles.province')->orderBy('users.id', 'DESC')->get()->toArray();
        // dd($users);
        return view('admin.user_list',['users'=> $users]);
        //return $users;
    }

    public function findUserProvinceReidfort()
    {
        $users = DB::table('users')->join('profiles',function($join){
                $join->on('users.id','=','profiles.user_id')->where('profiles.province','Reidfort');
            })
            ->select('users.*','profiles.address','profiles.tel','profiles.province')->orderBy('users.id', 'DESC')->get()->toArray();
        // dd($users);
        return view('admin.user_list',['users'=> $users]);
        //return $users;
    }

    public function updateUserAgeGreaterThan18()
    {
        $users = DB::table('users')->where('age','>',18)->update(['status' => 2]);
        $users = DB::table('users')->join('profiles','users.id','=','profiles.user_id')->orderBy('users.id', 'DESC')->select('users.*','profiles.address','profiles.tel','profiles.province')->get()->toArray();
        // dd($users);
        return view('admin.user_list',['users'=> $users]);
        //return $users;
    }
}
