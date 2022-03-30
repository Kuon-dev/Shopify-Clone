<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        // basic passing data #1 compact method
        // $email = 'test@gmail.com';
        // $username = 'root';
        // return view('users.index', compact('email', 'username'));

        //with method
        $data = [
            'userOne' => 'test1',
            'userTwo' => 'test2',
        ];
        //return view('users.index') -> with('data', $data);

        //directly in view 
        return view('users.index', [
            'data' => $data
        ]);

        return view('users.index');
        
    }
    public function formSubmit(Request $request) {
    	return response()->json([$request->all()]);
    }
}
