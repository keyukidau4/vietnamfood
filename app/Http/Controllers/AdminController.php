<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function returnViewLogin()
    {
        if (Auth::guard('admins')->check()) {
            return Redirect::route('admin.dasboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        Validator::make($request->all(), Administrator::$rule_login)->validate();

        $credentials = $request->only('email', 'password');

        if(Auth::guard('admins')->attempt($credentials)){

            return Redirect::route('admin.dashboard')->with('login_success','正常にログインしました。');
        }
        return Redirect::route('admin.login')->withInput(['email'=>$request->email], ['login_fail','ログインに失敗しました。']);
    }

    public function logout()
    {
        if (Auth::guard('admins')->check()) {
            Auth::guard('admins')->logout();
            Auth::logout();

            return redirect()->route('admin.login')->with('logout_success',"dang xuat thanh cong");
        }
        return redirect()->route('admin.login')->withErrors(['logout'=>'khong the dang xuat']);
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
