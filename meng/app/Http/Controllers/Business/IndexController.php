<?php

namespace App\Http\Controllers\Business;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Business;

use Mail;

class IndexController extends Controller
{
    /*
     * 展示商家大厅
     */
    public function businessHome(){
        return view('business/index/index');
    }

    /*
     * 商家信息
     * 展示
     * 修改
     */
    public function businessInfo(){
        //echo session('bname');die;
        $business = new Business\Business();
        $info = $business -> where('bid',session('bid')) ->first()->toArray();
        return view('business/index/info',['info'=>$info]);
    }

    /*
     * 邮箱激活
     * 发送验证码
     */
    public function businessEmail(Request $request){

        $email = $request -> input('email');
        $check_code = rand(0,99999);
        session(['check_code'=>$check_code]);

/*        Mail::send('welcome', ['name' => $name], function ($m) use($e) {
            $m->to($e)->subject('Your Reminder!');
        });*/
        Mail::raw('校验码'.$check_code.'安全起见，不要告知他人', function ($m) use($email){
            $m->to($email)->subject('合作 共赢');
        });
        return back()->with(['mag'=>'show']);


    }
    /*
     * 邮箱激活验证
     */
    public function businessCode(Request $request){

        $check = $request -> input('check');

        $check_code = session('check_code');

        if($check == $check_code){
            $business = new Business\Business();
            $data['bstatus'] = 1;
            $re = $business -> where('bid',session('bid'))->update($data);
            if($re){
                return back();
            }else{
                return back()->with(['error'=>'激活失败']);
            }

        }
    }
}
