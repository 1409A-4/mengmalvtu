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
            'bemail' => 'required | unique:business,bemail',
            'bname' => 'required | unique:business,bname',
            'bpwd' => 'required',
            'rpwd' => 'required | same:bpwd',
            'bcheck' => 'accepted',

        ];
        $message = [
            'bemail.required' =>  '邮箱不能为空！',
            'bemail.unique'   =>  '邮箱已被占用！',
            'bname.required'  =>  '商号不能为空！',
            'bname.unique'    =>  '商号已被占用！',
            'bpwd.required'   =>  '密码不能为空！',
            'rpwd.required'   =>  '确认密码不能为空！',
            'rpwd.confirmed'  =>  '确认密码不一致！',
            'bcheck.accepted' =>  '赞同商户协议！',

        ];
        $validator = Validator::make($data, $rules, $message);
        if ($validator->passes()) {
            $business = new Business();
            $data = $request->except('_token','bcheck','rpwd');
            $re = $business -> insert($data);
           var_dump($re);die;




        } else {
            return back()->withErrors($validator)->with(['st'=>1]);
        }

    }
}
