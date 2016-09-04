<?php

namespace App\Http\Controllers\Business;

use App\Model\Business\Business;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Model\Business\Region;

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
            'bname' => 'required',
            'bpwd' => 'required',
        ];

        $message = [
            'bname.required' => '账户不能为空！',
            'bpwd.required' => '密码不能为空！',
        ];

        $validator = Validator::make($data, $rules, $message);
        if ($validator->passes()) {
            $business = new Business();
            $data['bpwd']=md5($data['bpwd']);
            $re = $business->where($data)->first();
            if($re){
                session(['bid'=>$re->bid,'bname'=>$re->bname]);
                $b_time['betime'] = date('Y-m-d H:i:s');
                $business->where('bid', session('bid'))->update($b_time);   //修改登录时间
                return redirect('business/home');
            }else{
                return back()->with(['messages'=>'商号或密码错误！']);
            }
        } else {
            return back()->withErrors($validator);
        }
    }

    /*
     * 退出登录
     * */
    public function businessLogout(Request $request){
        $request->session()->flush();
        return redirect('business/login')->with(['messages'=>'退出成功!']);
    }

    /*
     *商户入驻
     */
    public function businessAdd(Request $request){


        $data = $request->except('_token');

        //验证规则
        $rules = [
            'bphone' => 'required | utf',
/*            'bname' => 'required | unique:business,bname',
            'btruename' => 'required',
            'bemail' => 'required | unique:business,bemail',

            'bpwd' => 'required',
            'rpwd' => 'required | same:bpwd',
            'bcheck' => 'accepted',*/

        ];
        $message = [
            'bphone.required'  =>  '手机号不能为空！',
            'bphone.utf'  =>  '汉字不正确！',
/*            'bname.required'  =>  '商号不能为空！',
            'bname.unique'    =>  '商号已被占用！',
            'btruename.required'    =>  '真实姓名不能为空！',
            'bemail.required' =>  '邮箱不能为空！',
            'bemail.unique'   =>  '邮箱已被占用！',
            'bpwd.required'   =>  '密码不能为空！',
            'rpwd.required'   =>  '确认密码不能为空！',
            'rpwd.confirmed'  =>  '确认密码不一致！',
            'bcheck.accepted' =>  '赞同商户协议！',*/

        ];

        $validator = Validator::make($data, $rules, $message);

        if ($validator->passes()) {
            return $data['bphone'];

            $business = new Business();
            $data = $request->except('_token','bcheck','rpwd');

            if ($request->hasFile('blicence')) {            //图片上传
                $file = $_FILES['blicence'];
                $data['blicence'] =\FileUp::image($file);
                $data['bbtime']=date('Y-m-d H:i:s');
                $data['bip']=$_SERVER["REMOTE_ADDR"];
                $data['baddress'] = $data['province'].','.$data['city'].','.$data['county'];
                $data['bpwd'] = md5($data['bpwd']);
                unset($data['province'],$data['city'],$data['county']);
                $re = $business -> insert($data);
                if($re){
                    return back()->with(['messages'=>'入驻成功！请登录']);
                }else{
                    return back()->with(['message'=>'入驻失败！','st'=>1]);
                }
            }else{
                return back()->with(['message'=>'文件不存在！','st'=>1]);
            }

        } else {
            return back()->withErrors($validator)->with(['st'=>1]);
        }

    }
}
