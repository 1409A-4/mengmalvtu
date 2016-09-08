

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>猛犸旅途登录表单</title>
    <base href="{{URL::asset('/')}}">
    <link rel="stylesheet" href="./css/style.css" />

<body>

<div class="login-container">
    <h1>登录</h1>

    <div class="connect">
        {{--<p>www.17sucai.com</p>--}}
    </div>

    <form action="{{URL('login/loginin')}}" method="post" id="loginForm" {{--style="float: left;padding-left: 30%;margin-right: 10%"--}}>
        @if (count($errors) > 0)
            <div >
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="text" name="username" class="username" placeholder="用户名" autocomplete="off"/>
        </div>
        <div>
            <input type="password" name="password" class="password" placeholder="密码" oncontextmenu="return false" onpaste="return false" />
        </div>
        <div>
            <input type="text" name="uverify" class="password" placeholder="验证码">

            <img src="{{URL('admin/verify/1')}}" width="100%" height="50px" onclick="this.src='{{URL('admin/verify')}}/'+Math.random()">
        </div>
        <button id="submit" type="submit">登 陆</button>
    </form>
{{--<div style="float: left; ">--}}
    <a href="{{URL('index/register')}}" {{--style="display: block;margin-top: 40%"--}}>

        <div>  <button type="button" class="">还有没有账号？</button></div>
        <br><p style="font-size: 20px;color: #ff4a4d">使用以下帐号直接登录</p>
        <br><a href="http://123.56.88.15/yanan/demo/index.php"><img src="/images/weixin.png" style="width: 32px;height: 32px" alt=""></a><span id="hzy_fast_login"></span>
    </a>
</div>
{{--</div>--}}
{{--第三方登录--}}
<script type="text/javascript" src="http://open.51094.com/user/myscript/157a481067e6d3.html "></script>
<script src="./js/jquery.min.js"></script>
<script src="./js/common.js"></script>
<!--背景图片自动更换-->
<script src="./js/supersized.3.2.7.min.js"></script>
<script src="./js/supersized-init.js"></script>
<!--表单验证-->
<script src="./js/jquery.validate.min.js?var1.14.0"></script>

</body>
</html>