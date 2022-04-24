<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MercantLoginRequest;
use App\Models\Adminmerchant;

class logincontroller extends Controller
{
    // صفحة دخول التاجر
    public function viewmerchantlogin()
    {
        return view('admin-merchant.auth.login') ;
    }

    public function merchantlogin(MercantLoginRequest $request){

        
       // return $request ;
        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('adminmerchant')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
           // notify()->success('تم الدخول بنجاح  ');
            return redirect() -> route('merchant.dashbord');
        }
       // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }
}
