<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
        $term = $request->get('user');
        return User::findByNameOrEmail($term)->get()->toJson();
    }

    public function show(Request $request){
        dd($request->all());
    }
    public function user($id){
        dd(User::where('id',$id)->first());
    }
}
