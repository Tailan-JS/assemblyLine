<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class TeamController extends Controller
{
    public function add(request $req){
        $userCode = $req->userCode;
        $teamMember = User::select(['id'])->where('userCode',$userCode)->first();
        $user = User::findOrFail($req->userAuth);
        $arr = $user->team;
        if($teamMember=='')
        return redirect('/team');
        if(!in_array($teamMember['id'],$arr)){
        $arr[count($arr)] = $teamMember['id'];
        $user->team = $arr;
        $user->save();
        return redirect('/team');
        }
        //$user->team = $teamMember;
    }
}
