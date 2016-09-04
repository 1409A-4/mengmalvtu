<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Model\Admin\Classify;
use App\Model\Admin\Goods;
use App\Model\Admin\GoodsImg;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GoodsController extends Controller
{
    /*
     * 加载商品添加
     * */
    public function LoadGoodsAdd(){
        $data=Classify::get()->toArray();
        $data=\Tool::tree($data);
        return view('admin/goods/add',['data'=>$data]);
    }
    /*
     * 商品添加
     * */
    public function GoodsAdd(Request $request){
        $data=$request->except('_token','gimg');
        $rules=[
            'gname' => 'required|between:2,10|unique:goods',
            'gprice'=>'required|integer',
            'gstock'=>'required|integer',
            'nid'=>'integer',
            'gaddress'=>'required',
            'ghome'=>'required|between:2,100'
        ];
        $message=[
            'gname.required'=>'商品名称不能为空！',
            'gname.between'=>'商品名称长度必须在2到10位之间！',
            'gname.unique'=>'商品名称已经占用！',
            'gprice.required'=>'商品价格不能为空！',
            'gprice.integer'=>'商品价格必须为整数！',
            'gstock.required'=>'商品库存不能为空！',
            'gstock.integer'=>'商品库存必须为整数！',
            'nid.integer'=>'请选择商品分类！',
            'gaddress.required'=>'请选择商品所在地区！',
            'ghome.required'=>'商品详细地址不能为空！',
            'ghome.between'=>'商品详细地址长度必须在2到100位之间！'
        ];
        $validator = Validator::make($data, $rules, $message);
        if ($validator->passes()) {
            $data['bid']=session('uid');
            $data['gbtime']=date('Y-m-d H:i:s');
            if($gid=Goods::insertGetId($data)){
                if ($request->hasFile('gimg')) {
                    foreach($_FILES['gimg']['name'] as $k=>$v){
                        $file['name']=$_FILES['gimg']['name'][$k];
                        $file['type']=$_FILES['gimg']['type'][$k];
                        $file['tmp_name']=$_FILES['gimg']['tmp_name'][$k];
                        $file['error']=$_FILES['gimg']['error'][$k];
                        $file['size']=$_FILES['gimg']['size'][$k];
                        $arr[$k]['gimg']=\FileUp::image($file);
                        $arr[$k]['gid']=$gid;
                    }
                    if(GoodsImg::insert($arr)){
                        return back()->with(['message'=>'添加成功！']);
                    }else{
                        return back()->with(['message'=>'添加图片失败！']);
                    }
                }
            }else{
                return back()->with(['message'=>'商品添加失败！']);
            }
        } else {
            return back()->withErrors($validator);
        }
    }
    /*
     * 商品管理
     * */
    public function GoodsShow(){
        $data=Goods::get();
        foreach($data as $k=>$v){
            $data[$k]->nname=Classify::where('nid',$v->nid)->value('nname');
        }
        return view('admin/goods/show',['data'=>$data]);
    }
    /*
     * 加载商品编辑
     * */
    public function LoadGoodsEdit(Request $request){
        $goods=Goods::where('gid',$request->input('gid'))->first()->toArray();
        $data=Classify::get()->toArray();
        $data=\Tool::tree($data);
        return view('admin/goods/edit',['data'=>$data,'goods'=>$goods]);
    }
    /*
     * 商品编辑
     * */
    public function GoodsEdit(Request $request){
        $gid=$request->input('gid');
        $data=$request->except('_token','gimg');
        $rules=[
            'gname' => "required|between:2,10|unique:goods,gname,$gid,gid",
            'gprice'=>'required|integer',
            'gstock'=>'required|integer',
            'nid'=>'integer',
            'gaddress'=>'required',
            'ghome'=>'required|between:2,100'
        ];
        $message=[
            'gname.required'=>'商品名称不能为空！',
            'gname.between'=>'商品名称长度必须在2到10位之间！',
            'gname.unique'=>'商品名称已经占用！',
            'gprice.required'=>'商品价格不能为空！',
            'gprice.integer'=>'商品价格必须为整数！',
            'gstock.required'=>'商品库存不能为空！',
            'gstock.integer'=>'商品库存必须为整数！',
            'nid.integer'=>'请选择商品分类！',
            'gaddress.required'=>'请选择商品所在地区！',
            'ghome.required'=>'商品详细地址不能为空！',
            'ghome.between'=>'商品详细地址长度必须在2到100位之间！'
        ];
        $validator = Validator::make($data, $rules, $message);
        if ($validator->passes()) {
            $data['bid']=session('uid');
            $data['getime']=date('Y-m-d H:i:s');
            if ($request->hasFile('gimg')) {
                if($bool=Goods::where('gid',$gid)->update($data)!==false){
                    foreach($_FILES['gimg']['name'] as $k=>$v){
                        $file['name']=$_FILES['gimg']['name'][$k];
                        $file['type']=$_FILES['gimg']['type'][$k];
                        $file['tmp_name']=$_FILES['gimg']['tmp_name'][$k];
                        $file['error']=$_FILES['gimg']['error'][$k];
                        $file['size']=$_FILES['gimg']['size'][$k];
                        $arr[$k]['gimg']=\FileUp::image($file);
                        $arr[$k]['gid']=$gid;
                    }
                    if(GoodsImg::insert($arr)){
                        return back()->with(['message'=>'修改成功！']);
                    }else{
                        return back()->with(['message'=>'添加图片失败！']);
                    }
                }else{
                    return back()->with(['message'=>'修改失败！']);
                }
            }else{
                if($bool=Goods::where('gid',$gid)->update($data)!==false){
                    return back()->with(['message'=>'修改成功！']);
                }else{
                    return back()->with(['message'=>'修改失败！']);
                }
            }
        } else {
            return back()->withErrors($validator);
        }
    }
    /*
    * 商品删除
    * */
    public function GoodsDel(Request $request){
        $gid=$request->input('gid');
        $bool=DB::transaction(function () use($gid) {
            Goods::where('gid',$gid)->delete();
            GoodsImg::where('gid',$gid)->delete();
        });
        if($bool){
            echo json_encode(0);
        }else{
            echo json_encode(1);
        }
    }
    /*
     * 加载商品图片
     * */
    public function LoadGoodsImg(Request $request){
        $gid=$request->input('gid');
        $data=GoodsImg::where('gid',$gid)->get();
        return view('admin/goods/goodsimg',['data'=>$data,'gid'=>$gid]);
    }
    /*
     * 商品添加
     * */
    public function AddGoodsImg(Request $request){
        $gid=$request->input('gid');
        if ($request->hasFile('gimg')) {
            foreach($_FILES['gimg']['name'] as $k=>$v){
                $file['name']=$_FILES['gimg']['name'][$k];
                $file['type']=$_FILES['gimg']['type'][$k];
                $file['tmp_name']=$_FILES['gimg']['tmp_name'][$k];
                $file['error']=$_FILES['gimg']['error'][$k];
                $file['size']=$_FILES['gimg']['size'][$k];
                $arr[$k]['gimg']=\FileUp::image($file);
                $arr[$k]['gid']=$gid;
            }
            if(GoodsImg::insert($arr)){
                return back()->with(['message'=>'添加图片成功！']);
            }else{
                return back()->with(['message'=>'添加图片失败！']);
            }
        }else{
            return back()->with(['message'=>'请添加图片再上传亲！']);
        }
    }
    /*
     * 商品图片删除
     * */
    public function DelGoodsImg(Request $request){
        if(GoodsImg::where('iid',$request->input('iid'))->delete()){
            echo json_encode(1);
        }else{
            echo json_encode(0);
        }
    }
}
