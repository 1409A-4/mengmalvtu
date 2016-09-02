<!DOCTYPE html>
<html lang="en">

<head>
    <title>用户添加</title>
    <base href="{{URL::asset('/')}}"/>
    @include('admin.public.style')
</head>

<body class=" ">
@include('admin.public.head')
        <!--BEGIN PAGE WRAPPER-->
<div id="page-wrapper">
    <!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">欢迎<font face="Algerian">{{session('uname')}}</font>登录</div>
        </div>
        <div class="btn btn-blue reportrange hide"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i class="fa fa-angle-down"></i>
            <input type="hidden" name="datestart" />
            <input type="hidden" name="endstart" />
        </div>
        <div class="clearfix"></div>
    </div>
    <!--END TITLE & BREADCRUMB PAGE-->
    <!--BEGIN CONTENT-->
    <div class="page-content">
        <div id="page-user-profile" class="row">
            <div class="col-md-12">
                <div class="panel panel-grey">
                    <div class="panel-heading">用户管理</div>
                    <div class="panel-body">
                        <table class="table table-hover table-bordered table-striped">
                            <thead class="bg-blue text-center">
                            <tr>
                                <th class="text-center">编号</th>
                                <th class="text-center">账户</th>
                                <th class="text-center">邮箱</th>
                                <th class="text-center">创建时间</th>
                                <th class="text-center">上次登录</th>
                                <th class="text-center">登录IP</th>
                                <th class="text-center">状态</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $k=>$v)
                                <tr class="text-center">
                                    <td class="uid">{{$v->uid}}</td>
                                    <td>{{$v->uname}}</td>
                                    <td>{{$v->uemail}}</td>
                                    <td>{{$v->ubtime}}</td>
                                    <td>{{$v->uetime or "NULL"}}</td>
                                    <td>{{$v->uip}}</td>
                                    <td>
                                        @if($v->ustatus==1)
                                            <div><span class="label label-sm label-success status1">正常</span></div>
                                            @else
                                            <div><span class="label label-sm label-danger status0" >禁用</span></div>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END CONTENT-->
</div>
<input type="hidden" name="message" value="{{session('message')}}" id="message">
@include('admin.public.foot')
</body>
</html>
<script>
    var message=$('#message').val();
    if(message!==""){
        layer.msg(message, {icon:6 });
    }
    /*
    * 禁用用户
    * */
    $(document).on('click','.status1',function(){
        var _this=$(this);
        var uid=$(this).parents('tr').find('.uid').html();
        $.getJSON('admin/useredit',{uid:uid,ustatus:2},function(msg){
            _this.parent().html("<div><span class=\"label label-sm label-danger status0\" >禁用</span></div>");
            layer.msg("修改成功！", {icon:6 });
        });
    })
    /*
    * 还原用户
    * */
    $(document).on('click','.status0',function(){
        var _this=$(this);
        var uid=$(this).parents('tr').find('.uid').html();
        $.getJSON('admin/useredit',{uid:uid,ustatus:1},function(msg){
            _this.parent().html("<div><span class=\"label label-sm label-success status1\" >正常</span></div>");
            layer.msg("修改成功！", {icon:6 });
        });
    })
</script>