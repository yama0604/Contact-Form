<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AdminResisterRequest;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Support\Facades\Auth;

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

    // Fortifyを使用したログイン（フォームリクエストあり）
    public function customLogin(AdminLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin'); // ログイン成功時の遷移先
        }

        return back()->withErrors([
            'email' => '認証情報が正しくありません。',
        ])->onlyInput('email');
    }
}
