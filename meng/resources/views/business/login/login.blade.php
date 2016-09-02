<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>商户登录</title>
    <base href="{{URL::asset('/')}}">
    <meta name="keywords" content="Bootstrap" />
    <meta name="description" content="Bootstrap" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/validationEngine.jquery.css">
    <!-- basic styles -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <!-- page specific plugin styles -->

    <!-- fonts -->



    <!-- ace styles -->

    <link rel="stylesheet" href="assets/css/ace.min.css" />
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    <!表单验证-->
    <script src="assets/js/jq.js"></script>
    <script src="assets/js/jquery.validationEngine-zh_CN.js"></script>
    <script src="assets/js/jquery.validationEngine.js"></script>
    <script type="text/javascript" src="assets/js/region.js"></script>
    <script>
        $(function () {
            $('#form_id').validationEngine();
            $('#form_register').validationEngine();
            var st=$('#center').attr('st');
            if(st==1){
                $('.widget-box.visible').removeClass('visible');
                $('#signup-box').addClass('visible');
            }
        });

    </script>
    <script>
        var obj = eval(data);
        var str = '';
        jQuery(function () {
            str += "<option value=''>-请选择-</option>";
            for (v in obj.province) {
                str += "<option value='" + v + "'>" + obj.province[v] + "</option>";
            }
            jQuery('#pro').html(str);

            jQuery("#pro").change(function () {
                var str = '';
                var cid = jQuery('#pro').val();
                //alert(cid)
                str += "<option value=''>-请选择-</option>";
                for (v in obj.city[cid]) {
                    str += "<option value='" + v + "'>" + obj.city[cid][v] + "</option>";
                    var str1 = "<option value=''>-请选择-</option>";
                }
                jQuery('#city').html(str);
                jQuery('#county').html(str1);
            });
            jQuery("#city").change(function () {
                var str = '';
                var cid = jQuery('#city').val();
                //alert(cid)
                str += "<option value=''>-请选择-</option>";
                for (v in obj.county[cid]) {
                    str += "<option value='" + v + "'>" + obj.county[cid][v] + "</option>";

                }
                jQuery('#county').html(str);
            })
        });
    </script>

</head>

<body class="login-layout">
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center" id="center" st="{{ session('st') }}">
                        <h1>
                            <i class="icon-leaf green"></i>
                            <span class="red">合作</span>
                            <span class="white">共赢</span>
                        </h1>
                        <h4 class="blue">&copy; 猛犸旅途</h4>
                    </div>

                    <div class="space-6"></div>

                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger">
                                        <i class="icon-coffee green"></i>
                                        请输入
                                    </h4>

                                    @if (count($errors) > 0 && session('st')!=1)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif



                                    <div class="space-6"></div>

                                    <form id="form_id" method="post" action="business/login_pro">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <fieldset>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control
															validate[required]" name="business_name" placeholder="商号" />
															<i class="icon-user"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control validate[required]"
                                                                   name="business_pwd"      placeholder="密码" />
															<i class="icon-lock"></i>
														</span>
                                            </label>

                                            <div class="space"></div>

                                            <div class="clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" name="business_check"/>
                                                    <span class="lbl"> 保 存 </span>
                                                </label>

                                                <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                    <i class="icon-key"></i>
                                                    登 录
                                                </button>
                                            </div>

                                            <div class="space-4"></div>
                                        </fieldset>
                                    </form>

                                </div><!-- /widget-main -->

                                <div class="toolbar clearfix">
                                    <div>
                                        <a href="#" onclick="show_box('forgot-box'); return false;" class="forgot-password-link">
                                            <i class="icon-arrow-left"></i>
                                            忘记密码
                                        </a>
                                    </div>

                                    <div>
                                        <a href="#" onclick="show_box('signup-box'); return false;" class="user-signup-link">
                                            注册
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- /widget-body -->
                        </div><!-- /login-box -->

                        <div id="forgot-box" class="forgot-box  widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header red lighter bigger">
                                        <i class="icon-key"></i>
                                        Retrieve Password
                                    </h4>

                                    <div class="space-6"></div>
                                    <p>
                                        Enter your email and to receive instructions
                                    </p>

                                    <form>
                                        <fieldset>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="icon-envelope"></i>
														</span>
                                            </label>

                                            <div class="clearfix">
                                                <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                                                    <i class="icon-lightbulb"></i>
                                                    Send Me!
                                                </button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div><!-- /widget-main -->

                                <div class="toolbar center">
                                    <a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
                                        Back to login
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div><!-- /widget-body -->
                        </div><!-- /forgot-box -->

                        <div id="signup-box" class="signup-box widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header green lighter bigger">
                                        <i class="icon-group blue"></i>
                                        申请店铺
                                    </h4>
                                    @if (count($errors) > 0 && session('st')==1)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="space-6"></div>
                                    <p> 快速注册: </p>

                                    <form id="form_register" action="business/add" method="post">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <fieldset>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="bname" class="form-control
															validate[required]" placeholder="商号" />
															<i class="icon-dashboard"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="btruename" class="form-control
															validate[required]"
                                                                   placeholder="真实姓名" />
															<i class="icon-user"></i>
														</span>
                                            </label>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="bidcard" class="form-control
															validate[required]"
                                                                   placeholder="身份证号" />
															<i class="icon-edit"></i>
														</span>
                                            </label>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" name="bemail" class="form-control
															validate[required]"
                                                                   placeholder="邮箱" />
															<i class="icon-envelope"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="bdescribe" class="form-control
															validate[required]"
                                                                   placeholder="描述" />
															<i class="icon-inbox"></i>
														</span>
                                            </label>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="bphone" class="form-control
															validate[required]"
                                                                   placeholder="手机" />
															<i class="icon-hdd"></i>
														</span>
                                            </label>




                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="bpwd" class="form-control
															validate[required]"
                                                                   placeholder="密码" />
															<i class="icon-lock"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="rpwd" class="form-control
															validate[required]"
                                                                   placeholder="确认 密码" />
															<i class="icon-retweet"></i>
														</span>
                                            </label>


                                            <label class="block clearfix">

                                                <span class="block input-icon input-icon-right"> 上传营业执照
                                                <input type="file" name="blicence" >
                                                    </span>
                                            </label>
                                            <label class="block clearfix">

                                                <select name="province" id="pro" class=" validate[required]
                                                col-md-4"></select>
                                                <select name="city" id="city" class="validate[required]
                                                col-md-4"></select>
                                                <select name="county" id="county" class="validate[required]
                                                col-md-4"></select>
                                            </label>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="baddress" class="form-control
															validate[required]"
                                                                   placeholder="详细地址" />
															<i class="icon-home"></i>
														</span>
                                            </label>
                                            <label class="block">
                                                <input type="checkbox" name="bcheck" class="ace
                                                validate[minCheckbox[1]]" />
                                                <span class="lbl">
															我接受
															<a href="#">商户协议</a>
														</span>
                                            </label>

                                            <div class="space-24"></div>

                                            <div class="clearfix">
                                                <button type="reset" class="width-30 pull-left btn btn-sm">
                                                    <i class="icon-refresh"></i>
                                                    重置
                                                </button>

                                                <button type="submit" class="width-65 pull-right btn btn-sm btn-success">
                                                    注册
                                                    <i class="icon-arrow-right icon-on-right"></i>
                                                </button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>

                                <div class="toolbar center">
                                    <a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
                                        <i class="icon-arrow-left"></i>
                                        去 登录
                                    </a>
                                </div>
                            </div><!-- /widget-body -->
                        </div><!-- /signup-box -->
                    </div><!-- /position-relative -->
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->



<!-- <![endif]-->

<!--[if IE]>

<![endif]-->

<!--[if !IE]> -->

<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

<!-- inline scripts related to this page -->

<script type="text/javascript">
    function show_box(id) {
        jQuery('.widget-box.visible').removeClass('visible');
        jQuery('#'+id).addClass('visible');
    }
</script>

</body>
</html>
