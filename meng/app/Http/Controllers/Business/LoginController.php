<?php

namespace App\Http\Controllers\Business;

use App\Model\Business\Business;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /*
     * 加载登录
     * */
    public function businessLogin()
    {
        return view('business/login/login');
    }

    /*
     * 登录验证
     * */
    public function businessLogin_pro(Request $request)
    {

        $data = $request->except('_token');

        $rules = [
            'business_name' => 'required',
            'business_pwd' => 'required',

        ];
        $message = [
            'business_name.required' => '账户不能为空！',
            'business_pwd.required' => '密码不能为空！',

        ];
        $validator = Validator::make($data, $rules, $message);
        if ($validator->passes()) {
            return $data;

        } else {
            return back()->withErrors($validator);
        }
    }

    /*
     * 退出登录
     * */
    public function businessLogout(Request $request){
        $request->session()->flush();
        return redirect()->action('Admin\LoginCoontroller@loadLogin')->with(['message'=>'退出成功!']);
    }

    /*
     *商户入驻
     */
    public function businessAdd(Request $request){

        $data = $request->except('_token');

        $rules = [
            'b_email' => 'required',
            'b_name' => 'required',
            'b_pwd' => 'required',
            'r_pwd' => 'required',
            'b_check' => 'accepted',

        ];
        $message = [
            'b_email.required' =>  '邮箱不能为空！',
            'b_name.required'  =>  '商号不能为空！',
            'b_pwd.required'   =>  '密码不能为空！',
            'r_pwd.required'   =>  '确认密码有误！',
            'b_check.accepted' =>  '赞同商户协议！',

        ];
        $validator = Validator::make($data, $rules, $message);
        if ($validator->passes()) {
            return $data;

        } else {
            return back()->withErrors($validator);
        }

    }
}
