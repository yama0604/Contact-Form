<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AdminResisterRequest;
use App\Http\Requests\AdminLoginRequest;

class AdminController extends Controller
{
    // ユーザ登録ページ
    public function register()
    {
        return view('admin/register');
    }

    // ログインページ
    public function login()
    {
        return view('admin/login');
    }

    // アカウント登録
    public function create(AdminResisterRequest $request)
    {
        $user = $request->only(['name', 'email', 'password']);
        // User::create($user); //※＃＃＃＃アカウント登録＃＃＃＃＃※

        return view('admin/login');
    }

    // ログイン
    public function loginFnc(AdminLoginRequest $request)
    {
        $user = $request->only(['email', 'password']);
        // User::find($user); //※＃＃＃＃ログイン機能＃＃＃＃＃※

        return view('admin/admin'); //※＃＃＃＃管理画面へ遷移するよう変更＃＃＃＃＃※
    }
}