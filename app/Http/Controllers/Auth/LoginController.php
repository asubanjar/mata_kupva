<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     */
    protected string $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function customLogin(Request $request): mixed
    {
        // Validate that the username is provided
        $request->validate([
            'username' => 'required',
        ]);

        // Find the user by the username
        $user = User::where('username', $request['username'])->first();

        // If the user is not found, redirect back with an error message
        if ($user === null) {
            return redirect('login')->with('status', 'Username tidak ditemukan');
        }

        // Log in the user without checking the password
        Auth::login($user);

        return redirect()->intended('home')
                ->withSuccess('Signed in');
    }

    public function username(): string
    {
        return 'username';
    }
}