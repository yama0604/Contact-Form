<?php

namespace App\Actions\Fortify;

use App\Http\Requests\AdminRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CreateNewUser implements CreatesNewUsers
{
    public function create(array $input): User
    {

        App::make(AdminRegisterRequest::class)->validateResolved();

        $user = User::create([
            'name'     => $input['name'],
            'email'    => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        Auth::logout();
        Session::invalidate();
        Session::regenerateToken();

        session()->flash('redirect_from_register', true);

        return $user;
    }
}
