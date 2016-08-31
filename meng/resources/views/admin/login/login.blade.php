<!DOCTYPE html>
<html lang="en">
<head>
    <title>登录</title>
    <base href="{{URL::asset('/')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="vendors/iCheck/skins/all.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="css/themes/style1/pink-blue.css" class="default-style">
    <link type="text/css" rel="stylesheet" href="css/themes/style1/pink-blue.css" id="theme-change"
          class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="css/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="layer/skin/layer.css">
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body id="signin-page">
<div class="page-form" style="margin-top: 150px">
    <form action="admin/checklogin" class="form" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="header-content">
            <h1>登录</h1>
        </div>
        <div class="body-content">
            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-user"></i>
                    <input type="text" placeholder="账户" name="uname" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-key"></i>
                    <input type="password" placeholder="密码" name="upwd" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <input type="text" name="uverify" class="form-control" placeholder="验证码">
                {{--<a onclick="javascript:re_captcha();" ><img src="{{ URL('index/index/verfy') }}"  alt="验证码" title="刷新图片" id="c2c98f0de5a04167a9e427d883690ff6" border="0"></a>--}}
            </div>
            <div class="form-group">
                {{--{!! Geetest::render() !!}--}}
                <img src="admin/verify/1" width="100%" height="50px" onclick="this.src='admin/verify/'+Math.random()">
                {{--<a onclick="javascript:re_captcha();" ><img src="{{ URL('index/index/verfy') }}"  alt="验证码" title="刷新图片" id="c2c98f0de5a04167a9e427d883690ff6" border="0"></a>--}}
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block">登录
                </button>
            </div>
            <div class="clearfix"></div>

        </div>
    </form>
    <input type="hidden" name="message" value="{{session('message')}}" id="message">
</div>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<!--loading bootstrap js-->
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<script src="vendors/iCheck/icheck.min.js"></script>
<script src="vendors/iCheck/custom.min.js"></script>
<script src="layer/layer.js"></script>
<script>
    //BEGIN CHECKBOX & RADIO
    $('input[type="checkbox"]').iCheck({
        checkboxClass: 'icheckbox_minimal-grey',
        increaseArea: '20%' // optional
    });
    $('input[type="radio"]').iCheck({
        radioClass: 'iradio_minimal-grey',
        increaseArea: '20%' // optional
    });
    //END CHECKBOX & RADIO
</script>
<script type="text/javascript">
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-145464-12', 'auto');
    ga('send', 'pageview');
    var message=$('#message').val();
    if(message!==""){
        layer.msg(message, {icon:6 });
    }
</script>
</body>

</html>