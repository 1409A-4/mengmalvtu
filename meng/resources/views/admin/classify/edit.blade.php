<!DOCTYPE html>
<html lang="en">

<head>
    <title>分类编辑</title>
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
            <div class="page-title">欢迎<font face="Algerian">{{session('u_name')}}</font>登录</div>
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
                <div class="panel panel-blue">
                    <div class="panel-heading">分类添加</div>
                    <div class="panel-body pan">
                        <form action="admin/classifyedit" method="post" class="form-horizontal">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="nid" value="{{$value->nid}}">
                            <div class="form-body pal">
                                <div class="form-group">
                                    <label for="inputUsername" class="col-md-3 control-label">分类名称 <span class='require'>*</span>
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-icon"><i class="fa fa-indent"></i>
                                            <input id="inputUsername" type="text" placeholder="分类名称" name="nname" value="{{$value->nname}}" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-md-3 control-label">选择父类 <span class='require'>*</span>
                                    </label>
                                    <div class="col-md-9">
                                        <select  class="selectpicker bg-green form-control" name="pid">
                                            @if($value->pid==0)
                                                <option value="0">选择父类</option>
                                                @foreach($data as $k=>$v)
                                                    <option style="padding-left: {{$v['count']}}cm" value="{{$v['nid']}}">{{$v['nname']}}</option>
                                                @endforeach
                                                @else
                                                <option value="0">选择父类</option>
                                                @foreach($data as $k=>$v)
                                                    @if($value->pid==$v['nid'])
                                                        <option style="padding-left: {{$v['count']}}cm" value="{{$v['nid']}}" selected>{{$v['nname']}}</option>
                                                    @else
                                                        <option style="padding-left: {{$v['count']}}cm" value="{{$v['nid']}}">{{$v['nname']}}</option>
                                                    @endif
                                                @endforeach
                                            @endif

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputUsername" class="col-md-3 control-label">分类排序 <span class='require'>*</span>
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-icon"><i class="fa fa-indent"></i>
                                            <input id="inputUsername" type="text" placeholder="分类排序" name="nsort" value="{{$value->nsort}}"  class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn btn-primary">添加</button>&nbsp;
                                    <button type="reset" class="btn btn-green">取消</button>
                                </div>
                            </div>
                        </form>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
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
</script>