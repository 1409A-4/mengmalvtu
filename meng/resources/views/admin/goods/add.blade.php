<!DOCTYPE html>
<html lang="en">

<head>
    <title>商品添加</title>
    <base href="{{URL::asset('/')}}"/>
    @include('admin.public.style')
    <style type="text/css">
        #allmap {width: 100%;height:300px;overflow: hidden; margin:0;font-family:"微软雅黑";}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=qrVcijkPNAyshv7PwoeR2wPbG9Mtk4sX 	"></script>
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
                                <div class="form-group " >
                                    <label for="inputContent" class="col-md-3 control-label">商品地区<span class='require'>*</span></label>

                                    <div class="col-md-3">
                                        <select id="s_province"  class="selectpicker bg-green form-control" ></select>
                                    </div>
                                    <div class="col-md-3">
                                        <select id="s_city"  class="selectpicker bg-green form-control" ></select>
                                    </div>
                                    <div class="col-md-3">
                                        <select id="s_county"  class="selectpicker bg-green form-control" ></select>
                                    </div>
                                    <label for="inputContent" class="col-md-3 control-label"><span class='require'></span></label>
                                    <div class="col-md-9">
                                        <div id="allmap"  ></div>
                                    </div>
                                    <label for="inputUsername" class="col-md-3 control-label"> <span class='require'></span>
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-icon"><i class="fa fa-indent"></i>
                                            <input  type="text" placeholder="商品地区" id="gaddress" name="gaddress" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputContent" class="col-md-3 control-label">详细地址<span class='require'>*</span></label>
                                    <div class="col-md-9">
                                        <textarea id="inputContent" rows="3" class="form-control" id="" name="ghome"></textarea>
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
<script type="text/javascript">
    $(document).area("s_province","s_city","s_county");//调用三级插件
    var map = new BMap.Map("allmap");    // 创建Map实例
    map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);  // 初始化地图,设置中心点坐标和地图级别
    map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
    map.setCurrentCity("北京");          // 设置地图显示的城市 此项是必须设置的
    map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放


    var point = new BMap.Point(116.331398,39.897445);//鼠标点击地图显示
    map.centerAndZoom(point,12);
    var geoc = new BMap.Geocoder();
    map.addEventListener("click", function(e){
        var pt = e.point;
        geoc.getLocation(pt, function(rs){
            var addComp = rs.addressComponents;
            $('#gaddress').val(addComp.province+addComp.city+addComp.district+addComp.street+addComp.streetNumber);
//            alert(addComp.province + ", " + addComp.city + ", " + addComp.district + ", " + addComp.street + ", " + addComp.streetNumber);
        });
    });


    $('#s_province,#s_county,#s_city').change(function(){
        var one=$('#s_province').val();
        var two=$('#s_city').val();
        var three=$('#s_county').val();

        var city = one+two+three;
        if(city != ""){
            map.centerAndZoom(city,11);      // 用城市名设置地图中心点
        }
    })


    var message=$('#message').val();
    if(message!==""){
        layer.msg(message, {icon:6 });
    }
</script>