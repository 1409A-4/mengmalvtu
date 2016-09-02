<!DOCTYPE html>
<html lang="en">

<head>
    <title>商品添加</title>
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
                    <div class="panel-heading">商品添加</div>
                    <div class="panel-body pan">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="admin/goodsadd" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-body pal">
                                <div class="form-group">
                                    <label for="inputUsername" class="col-md-3 control-label">商品名称 <span class='require'>*</span>
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-icon"><i class="fa fa-indent"></i>
                                            <input id="inputUsername" type="text" placeholder="商品名称" name="gname" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputUsername" class="col-md-3 control-label">商品价格 <span class='require'>*</span>
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-icon"><i class="fa fa-indent"></i>
                                            <input id="inputUsername" type="text" placeholder="商品价格" name="gprice" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputUsername" class="col-md-3 control-label">商品库存 <span class='require'>*</span>
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-icon"><i class="fa fa-indent"></i>
                                            <input id="inputUsername" type="text" placeholder="商品库存" name="gstock" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-md-3 control-label">商品分类<span class='require'>*</span>
                                    </label>
                                    <div class="col-md-9">
                                        <select  class="selectpicker bg-green form-control" name="nid">
                                            <option value="商品分类">商品分类</option>
                                            @foreach($data as $k=>$v)
                                                <option style="padding-left: {{$v['count']}}cm" value="{{$v['nid']}}">{{$v['nname']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-md-3 control-label">所在地区<span class='require'>*</span>
                                    </label>
                                    <div class="col-md-3">
                                        <select id="s_province"  class="selectpicker bg-green form-control" name="sprovince"></select>
                                    </div>
                                    <div class="col-md-3">
                                        <select id="s_city"  class="selectpicker bg-green form-control" name="scity"></select>
                                    </div>
                                    <div class="col-md-3">
                                        <select id="s_county"  class="selectpicker bg-green form-control" name="scounty"></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputContent" class="col-md-3 control-label">详细地址<span class='require'>*</span></label>
                                    <div class="col-md-9">
                                        <textarea id="inputContent" rows="3" class="form-control" name="ghome"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputUsername" class="col-md-3 control-label">商品图片 <span class='require'>*</span>
                                    </label>

                                    <div class="col-md-9">
                                        <input id="file-5" class="file"  name="gimg[]" type="file" multiple data-preview-file-type="any" data-upload-url="#" data-preview-file-icon="">
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
    $(document).area("s_province","s_city","s_county");//调用三级插件
    var message=$('#message').val();
    if(message!==""){
        layer.msg(message, {icon:6 });
    }
</script>