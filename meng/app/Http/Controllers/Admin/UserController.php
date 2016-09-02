<?php

namespace App\Http\Controllers\Admin;
use App\Model\Admin\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller{
    /*
     * 加载用户添加
     * */
    public function LoadUserAdd(){
        return view('admin/user/add');
    }
    /*
     * 用户添加
     * */
    public function UserAdd(Request $request){
        $data = $request->except('_token');
        $rules = [
            'uname' => 'required|between:3,10',
            'upwd' => 'required|between:3,10',
            'urepwd' => 'required|same:upwd',
            'uemail' => 'required|email|unique:user,uemail',
            'uphone'=>'required|digits:11|unique:user,uphone'
        ];
        $message = [
            'uname.required' => '账户不能为空！',
            'uname.between' => '账户长度必须在3到10位之间！',
            'upwd.required' => '密码不能为空！',
            'upwd.between' => '密码长度必须在3到10位之间！',
            'urepwd.required' => '确认密码不能为空！',
            'urepwd.same' => '密码和确认密码必须相同！',
            'uemail.required' => '邮箱不能为空！',
            'uemail.email' => '邮箱格式不正确！',
            'uemail.unique' => '邮箱已经被占用！',
            'uphone.required' => '手机不能为空！',
            'uphone.email' => '手机号格式不正确！',
            'uphone.unique' => '手机号已经被占用！',
        ];
        $validator = Validator::make($data, $rules, $message);
        if ($validator->passes()) {
            unset($data['urepwd']);
            $data['upwd']=md5($data['upwd']);
            $data['ubtime']=date('Y-m-d H:i:s');
            $data['uip']=$_SERVER["REMOTE_ADDR"];
            if($bool=User::insert($data)){
                return back()->with(['message' => "添加成功！"]);
            }else{
                return back()->with(['message' => "系统异常，请联系管理员！"]);
            }
        } else {
            return back()->withErrors($validator);
        }
    }
    /*
     * 用户管理
     * */
    public function UserShow(){
        $data=User::get();
        return view('admin/user/show',['data'=>$data]);
    }
    /*
     * 用户编辑
     * */
    public function UserEdit(Request $request){
        $data=$request->all();
        if(User::where('uid',$data['uid'])->update(['ustatus'=>$data['ustatus']])){
            echo json_encode(1);
        }else{
            echo json_encode(0);
        }
    }
}
