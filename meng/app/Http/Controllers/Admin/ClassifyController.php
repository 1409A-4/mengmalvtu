<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Classify;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ClassifyController extends Controller{
    /*
     * 加载分类添加
     * */
    public function LoadClassifyAdd(){
        $data=Classify::get()->toArray();
        $data=\Tool::tree($data);
        return view('admin/classify/add',['data'=>$data]);
    }
    /*
     * 分类添加
     * */
    public function ClassifyAdd(Request $request){
        $data = $request->except('_token');
        $rules = [
            'nname' => 'required|between:2,7|unique:navigation,nname',
            'nsort' => "required|integer",
        ];
        $message = [
            'nname.required' => '分类不能为空！',
            'nname.between' => '分类名长度必须在2到7位之间！',
            'nname.unique' => '已经有该分类，不能再添加！',
            'nsort.required' => '分类排序不能为空！',
            'nsort.integer' => '分类排序必须是数字且是整数！'
        ];
        $validator = Validator::make($data, $rules, $message);
        if ($validator->passes()) {
            $data['nbtime']=date('Y-m-d H:i:s');
            if(Classify::insert($data)){
                return back()->with(['message'=>'添加成功！']);
            }else{
                return back()->with(['message'=>'系统错误，联系管理员！']);
            }
        } else {
            return back()->withErrors($validator);
        }
    }
    /*
     * 分类管理
     * */
    public function ClassifyShow(){
        $data=Classify::get()->toArray();
        $data=\Tool::tree($data);
        return view('admin/classify/show',['data'=>$data]);
    }
    /*
     * 加载分类编辑
     * */
    public function LoadClassifyEdit(Request $request){
        $nid=$request->input('nid');
        $value=Classify::where('nid',$nid)->first();
        $data=Classify::get()->toArray();
        $data=\Tool::tree($data);
        return view('admin/classify/edit',['data'=>$data,'value'=>$value]);
    }
    /*
     * 分类编辑
     * */
    public function ClassifyEdit(Request $request){
        $data = $request->except('_token');
        $nid=$data['nid'];
        $rules = [
            'nname' => "required|between:2,7|unique:navigation,nname,$nid,nid",
            'nsort' => "required|integer",
        ];
        $message = [
            'nname.required' => '分类不能为空！',
            'nname.between' => '分类名长度必须在2到7位之间！',
            'nname.unique' => '已经有该分类，不能再添加！',
            'nsort.required' => '分类排序不能为空！',
            'nsort.integer' => '分类排序必须是数字且是整数！'
        ];
        $validator = Validator::make($data, $rules, $message);
        if ($validator->passes()) {
            if(Classify::where('nid',$nid)->update($data)!==false){
                return redirect()->action('Admin\ClassifyController@ClassifyShow')->with(['message'=>"修改成功！"]);
            }else{
                return back()->with(['message'=>'系统错误，联系管理员！']);
            }
        } else {
            return back()->withErrors($validator);
        }
    }
    /*
     * 分类删除
     * */
    public function ClassifyDel(Request $request){
        $nid=$request->input('nid');
        if(Classify::where('pid',$nid)->get()->toArray()){
            echo json_encode(2);
        }else{
            if(Classify::where('nid',$nid)->delete()){
                echo json_encode(1);
            }else{
                echo json_encode(0);
            }
        }
    }
}