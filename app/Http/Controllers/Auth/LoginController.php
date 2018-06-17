<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;

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
     *
     * @var string
     */
    protected $redirectTo = '/' . LINK_BACKEND . '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function username()
    {
        return 'username';
    }

    public function credentials(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $checkUser   = $this->notCheckout($request->username);
        $credentials = array_merge($credentials, $checkUser);

        return $credentials;
    }

    public function showLoginForm()
    {
        return view('backend.auth.login');
    }


    public function notCheckout($username)
    {
        $field = 'username';
        if (filter_var($username, FILTER_VALIDATE_EMAIL) !== false) {
            $field = 'email';
        }

        $user = DB::table('users')
            ->where($field, $username)
            ->first();

        $return = array(
            'id' => ''
        );

        if ($user) {
            $return = array(
                'username' => $user->username
            );
        }

        return $return;
    }
}
