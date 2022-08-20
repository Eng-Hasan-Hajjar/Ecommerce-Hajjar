<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function  getLogin(){

        return view('admin.auth.login');
    }
    public function save(){
// for tinker
        $admin = new \App\Models\Admin();
        $admin -> name ="Ahmed Emam";
        $admin -> email ="ahmed@gmail.com";
        $admin -> password = bcrypt("Ahmed Emam");
        $admin -> save();


       // Admin::insert(["name" =>"Hasan Hajjar" ,"email" =>"hasan@gmail.com" ,"photo"=>"phoy","password" => bcrypt("0933912076") , "created_at" => new Datetime(),"updated_at" => new Datetime()]);
    }

    public function login(LoginRequest $request){

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
           // notify()->success('تم الدخول بنجاح  ');
            return redirect() -> route('admin.dashboard');
        }
       // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }
}
