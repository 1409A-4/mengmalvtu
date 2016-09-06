<?php

namespace App\Http\Controllers\Business;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Business\Navigation;
use Illuminate\Support\Facades\Validator;
class GoodsController extends Controller
{
    //无限级分类
    public function make($arr,$fid=0,$level=0){
        //print_r($arr);die;
        static $data=array();
        foreach($arr as $k=>$v){
            if($v['pid']==$fid){
                $v['level']=$level;
                $data[]=$v;
                $this->make($arr,$v['nid'],$level+1);
            }
        }
        return $data;
    }
    /*
     * 添加分类页面
     */
    public function typeAdd(){
        $navigation = new Navigation();
        $re = $navigation->where('bid',session('bid'))->get()->toArray();
        $ree=$this->make($re);
        return view('business/goods/type',['type'=>$ree]);

    }



    /*
     * 执行添加
     */
    public function typeAdd_pro(Request $request){
        $data = $request -> except('_token');

        //验证规则

        $rules = [
            'nname' => 'required | utf | between:2,8',
            'nsort' => 'required | digits_between:0,100',
        ];

        $message = [
            'nname.required' => '分类不能为空！',
            'nname.utf' => '分类必须为汉字！',
            'nname.between' => '2-8个汉字之间',
            'nsort.required' => '排序不能为空！',
            'nsort.digits_between' => '排序必须在0-100之间！',
        ];

        $validator = Validator::make($data, $rules, $message);
        if ($validator->passes()) {
            $data['nbtime'] = date('Y-m-d H:i:s');
            $data['bid'] = session('bid');
            $navigation = new Navigation();
            $re = $navigation->insert($data);
            if ($re) {

                return redirect('business/myType');
            } else {
                return back()->with(['mag'=>'添加失败！']);
            }
        } else {
            return back()->withErrors($validator);
        }


    }

    /*
     * 分类展示
      */

    public function myType(){
        $navigation = new Navigation();
        $data = $navigation ->where('bid',session('bid'))->get()->toArray();
        $type=$this->make($data);
        return view('business/goods/type_list',['type'=>$type]);
    }

    /*
     *删除分类
     */
    public function type_del(Request $request){

        $nid = $request -> input('nid');

        $navigation = new Navigation();
        $info = $navigation ->where('pid',$nid)->get()->toArray();  //判断是否存在子分类

        if(!empty($info)){
            return back()->with(['prompt'=>'此分类下存在子分类！']);
        }else{
            $re = $navigation ->where('nid',$nid)->delete();

            if ($re) {
                return back()->with(['prompt'=>'删除成功！']);
            } else {
                return back()->with(['prompt'=>'删除失败！']);
            }
        }
    }
	
	
	/*
	 *编辑分类
	 *
	 */
		public function type_upd(Request $request){
			$nid = $request -> input('nid');
			$navigation = new Navigation();
			$re = $navigation->where('bid',session('bid'))->get()->toArray();
			$info = $navigation->where('nid',$nid)->first()->toArray();
			$ree=$this->make($re);
			return view('business/goods/type_upd',['type'=>$ree,'info'=>$info]);
		}

		/*
		 * 执行分类编辑
		 */

		public function typeUpd_pro(Request $request){
            $data = $request -> except('_token');
            //验证规则

            $rules = [
                'nname' => 'required | utf | between:2,8',
                'nsort' => 'required | digits_between:1,2',
            ];

            $message = [
                'nname.required' => '分类不能为空！',
                'nname.utf' => '分类必须为汉字！',
                'nname.between' => '2-8个汉字之间',
                'nsort.required' => '排序不能为空！',
                'nsort.digits_between' => '排序必须是数字在0-99之间！',
            ];

            $validator = Validator::make($data, $rules, $message);
            if ($validator->passes()) {

                $navigation = new Navigation();
                $re = $navigation->where('nid',$data['nid'])->update($data);

                if($re){
                    return redirect('business/myType');
                }else {
                    return back()->with(['mag' => '修改失败！']);
                }

                } else {
                return back()->withErrors($validator);
            }
   }

	/*
	 * 商品添加页面
	 */
	public function goodsAdd(){
        $navigation = new Navigation();
        $re = $navigation->where('bid',session('bid'))->get()->toArray();
        $ree=$this->make($re);
        return view('business/goods/goodsAdd',['type'=>$ree]);
    }
}
