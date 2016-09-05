<?php

namespace App\Http\Controllers\Business;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Business\Navigation;
class GoodsController extends Controller
{
    /*
     * 添加分类页面
     */
    public function typeAdd(){
        $navigation = new Navigation();
        $re = $navigation->where('bid',session('bid'))->get()->toArray();
        $ree=$this->make($re);



        return view('business/goods/type',['type'=>$ree]);

    }

    //分类
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
     * 执行添加
     */
    public function typeAdd_pro(Request $request){
        $data = $request -> except('_token');
        $data['nbtime'] = date('Y-m-d H:i:s');
        $data['bid'] = session('bid');
        $navigation = new Navigation();
        $re = $navigation->insert($data);
        if ($re) {

            return redirect('business/myType');
        } else {
            return back()->with(['mag'=>'添加失败！']);
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
        $info = $navigation ->where('pid',$nid)->get()->toArray();

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
}
