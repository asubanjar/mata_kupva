<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function ldap_bind;
use function ldap_connect;
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

        /**
         * Handle a LDAP request to the application.
         */

    private static function ldapAuthentication(Request $request): bool
    {
        $username     = $request['username'];
        $passwd       = $request['password'];
        $ldap_connect = ldap_connect('ldap://172.16.10.21');
        if (! $ldap_connect) {
            return false;
        }

        $login_ldap_user = @ldap_bind($ldap_connect, 'ppatk\\' . $username, $passwd);
        if (! $login_ldap_user) {
            return false;
        }

        return true;
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request['username'])
            ->first();

        if ($user === null) {
            return redirect('login')->with('status', 'Username atau password tidak sesuai');
        }

        if (self::ldapAuthentication($request)) {
            Auth::login($user);

            return redirect()->intended('home')
                ->withSuccess('Signed in');
        }

        return redirect('login')->with('status', 'Username atau password tidak sesuai');
    }

    public function username()
    {
        return 'username';
    }
}
