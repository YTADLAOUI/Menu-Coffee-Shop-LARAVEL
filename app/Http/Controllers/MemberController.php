<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function register(Request $request){
         $request->validate([
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'min:6|required'
         ]);
        // $input = $request->all();
        User::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)

        ]);
        return redirect('/product')->with('flash_message','Compte add!');
        //  dd($request);
    }
}
