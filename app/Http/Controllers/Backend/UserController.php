<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Users;

class UserController extends Controller {
    public function index() {
        return "List User";
    }

    public function create() {
        $user = new Users();

        // $user->name = "Nguyen Van B";
        // $user->email = "B@gmail.com";
        // $user->password = "abcd";
        // $user->save();

        $user->name = "Nguyen Van C";
        $user->email = "C@gmail.com";
        $user->password = "abcd";
        $user->save();

        // $user->name = "Nguyen Van D";
        // $user->email = "D@gmail.com";
        // $user->password = "abcd";
        // $user->save();

        // $user->name = "Nguyen Van E";
        // $user->email = "E@gmail.com";
        // $user->password = "abcd";
        // $user->save();
    }

    // public function create() {
    //     return view('backend.user.create');
    // }

    // public function store(Request $request) {
    //     dd(__METHOD__, $request->all());
    // }

    // public function update(Request $request) {
    //     dd(__METHOD__, $request->all());
    // }

    // public function postForm(Request $request) {
    //     // var_dump($request->input()) ;
    //     // echo $request->name;
    //     $request->validate([
    //         "username" => "required",
    //         "password" => "required"
    //     ]);
    //     return $request->input();
    // }

    public function setCookie() {
        $response = new Response();
        $response->withCookie('MyCookie', 'trangle', 0.5);
        return $response;
    }

    public function getCookie(Request $request) {
        return $request->cookie('MyCookie');
    }

    public function uploadImage(Request $request) {
        if ($request->hasFile('myFile')) {
            $file = $request->file('myFile');
            $file->move('img', 'myfile.jpg');
        } else {
            echo "Chua co File";
        }
    }
}