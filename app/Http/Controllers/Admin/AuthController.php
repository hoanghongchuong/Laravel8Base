<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {
    public function register(Request $request) {
        $request->validate([
           'email' => ['required','email','unique:users'],
           'password' => 'required|min:6'
        ]);
        $dataUser = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $newUser = User::create($dataUser);
        return $newUser;
    }

    public function getLogin() {
        return view('admin.auth.login');
    }
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
//            $request->session()->regenerate();

            return redirect()->route('dashboard.index');
        }

        return back()->with([
            'error' => 'Email hoặc mật khẩu không chính xác',
        ]);
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('admin.get.login');
    }
}
