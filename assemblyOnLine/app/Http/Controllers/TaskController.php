<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;


class TaskController extends Controller
{
    public function team(){
        $user = Auth::user();
        $arr = [];
        for($i=0;$i<count($user->team);$i++){
        $arr[$i] = User::where('id',$user->team[$i])->first();
        }
        if(count($arr) >= 1)
        return view('team',['user'=>$arr]);
        else
        return view('team');
    }
}
