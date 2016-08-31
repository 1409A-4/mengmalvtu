<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Admin;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LoginCoontroller extends Controller
{
    /*
     * 加载登录
     * */
    public function loadLogin()
    {
        return view('admin/login/login');
    }

    /*
     * 登录验证
     * */
    public function checkLogin(Request $request)
    {
        $data = $request->except('_token');
        $rules = [
            'uname' => 'required',
            'upwd' => 'required',
            'uverify' => "required",
        ];
        $message = [
            'uname.required' => '账户不能为空！',
            'upwd.required' => '密码不能为空！',
            'uverify.required' => '验证码不能为空！'
        ];
        $validator = Validator::make($data, $rules, $message);
        if ($validator->passes()) {
            $verify = new \Verify();
            if ($verify->check($_POST['uverify'])) {
                unset($data['uverify']);
                $data['upwd'] = md5($data['upwd']);
                $bool=Admin::where($data)->first();
                session(['uid'=>$bool->uid,'uname'=>$bool->uname]);
                return redirect()->action('Admin\IndexController@Index');
            } else {
                return back()->with(['message' => "验证码错误！"]);
            }
        } else {
            return back()->withErrors($validator);
        }
    }

    /*
     * 验证码
     * */
    public function Verify(Request $request)
    {
        $verify = new \Verify();
        $verify->codeSet = '012356789';
        $verify->useImgBg = true;
        $verify->entry();
    }
    /*
     * 退出登录
     * */
    public function Logout(Request $request){
        $request->session()->flush();
        return redirect()->action('Admin\LoginCoontroller@loadLogin')->with(['message'=>'退出成功!']);
    }
}
