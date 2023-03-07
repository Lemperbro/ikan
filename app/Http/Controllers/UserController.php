<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\Post;

class UserController extends Controller
{
    //

    public function index(){

    }

    //di bawah ini cara pertama
    // public function find($user_id){
    //     return view('coba', [
    //         "judul" => "coba",
    //         "data" => User::findOrFail($user_id)
    //     ]);
    // }


    //di bawah ini cara ke 2
        public function find(User $user){
        return view('coba', [
            "judul" => "coba",
            "data" => $user
        ]);
    }
}
