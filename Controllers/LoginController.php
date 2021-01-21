<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    //
    public function auth(Request $request){
        $user = $request["username"];
        DB::enableQueryLog();
        $get = DB::table('admin_table')
        ->select("user")
        ->where("user",$user)
        ->whereRaw('password = md5(?)',[$request["password"]])
        ->get();
        if($get->isEmpty()){
            return redirect('/');
        }else{
            return view("success",["nama"=>$get[0]->user]);
        };
    }
}
