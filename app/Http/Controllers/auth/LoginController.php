<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            if(Auth::user()->role_id == 1){
                return redirect()->route('dashboard.admin')->with('success', 'Đăng nhập trang quản trị thành công!');
            }
            return redirect()->back()->with('success', 'Đăng nhập thành công!');
        }

        return back()->with('errorLogin', 'Email hoặc mật khẩu không chính xác!')->onlyInput('email');
    }
    public function register(Request $request){
        $request->validate([
            'password' => 'required|min:6|confirmed',
            'email' => 'unique:users,email',
        ],[
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự!',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp!',
            'email.unique' => 'Địa chỉ email này đã tồn tại!'
        ]);

        try {
            User::create([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'password' => Hash::make($request->password),
                'role_id' => 2,
                'employee_id' => $request->employee_id,
                'img' => 'user.png'
            ]);
            return back()->with([
                'success' => 'Bạn đã đăng kí tài khoản thành công.',
                'successRegister' => 'success'
            ]);
        }
        catch (\Exception $e){
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }
    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return redirect()->back()->with('success', 'Bạn đã đăng xuất thành công');
        }

        return redirect()->back();
    }
}
