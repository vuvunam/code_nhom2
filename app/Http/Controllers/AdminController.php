<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginPost(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
           return redirect()->route('admin.home');
        }else{
            return view('admin/error');
        }
    }
    public function home(){
        $adminUser = Auth::guard('admin')->user();
            return view('admin.home',['user'=>$adminUser]);
        
      
    }

    public function logout(){
        Auth::guard('admin')->logout();
}
}