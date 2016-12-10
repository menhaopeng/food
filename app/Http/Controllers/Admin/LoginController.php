<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

require_once '../resources/org/code/Code.class.php';


class LoginController extends Controller
{
    public function login()
    {
        if ($input = Input::get()) {    //判断是否有传递数据
            $code = new \Code();
            $_code = $code->get();   //获取验证码
            if ($_code != strtoupper($input['code'])){
                return back()->with('msg', '验证码错误/(ㄒoㄒ)/~~');   //返回错误信息（session）
            }
            $user = User::where('username', $input['username'])->first();   //判断是否有这个账户
            if ($user) {    //如果有这个用户，判断decrypt解密后的密码是否一致
                if (Crypt::decrypt($user->password) == $input['password']) {
                    session(['user' => $user]);
                    return redirect('admin/index');
                } else {
                    return back()->with('msg', '密码错误/(ㄒoㄒ)/~~');    //返回错误信息（session）
                }
            } else {
                return back()->with('msg', '找不到用户/(ㄒoㄒ)/~~');   //返回错误信息（session）
            }
        }
        return view('admin.login');
    }

    public function code()
    {
        $code = new \Code();
        $code->make();
    }

    public function logout()
    {
        session(['user' => null]);
        return redirect('admin/login');
    }
}
