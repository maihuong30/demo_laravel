<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        return view('backend.home.index');
    }

    public function getLogin()
    {
        if (Auth::check()) {
            return redirect(LINK_BACKEND);
        } else {
            return view('backend.auth.login');
        }

    }

    public function postLogin(LoginRequest $request)
    {
        $login = [
            'username' => $request->username,
            'password' => $request->password,
            'status' => 1
        ];

        if (Auth::attempt($login)) {
            return redirect(LINK_BACKEND);
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('getLogin');
    }
}