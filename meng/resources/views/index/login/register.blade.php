<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="{{URL::asset('/')}}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>猛犸旅途注册表单</title>
    <link rel="stylesheet" href="/css/style.css" />
<body>

<div class="register-container">
    <h1>ShareLink</h1>

    <div class="connect">
        <p>Link the world. Share to world.</p>
    </div>
    @if (count($errors) > 0)
        <div >
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{URL('index/regis')}}" method="post" id="registerForm">
        <div>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="text" name="username" class="username" placeholder="您的用户名" autocomplete="off"/>
        </div>
        <div>
            <input type="password" name="password" class="password" placeholder="输入密码" oncontextmenu="return false" onpaste="return false" />
        </div>
        <div>
            <input type="password" name="confirm_password" class="confirm_password" placeholder="再次输入密码" oncontextmenu="return false" onpaste="return false" />
        </div>
        <div>
            <input type="text" name="phone_number" class="phone_number" placeholder="输入手机号码" autocomplete="off" id="number"/>
        </div>
        <div>
            <input type="email" name="email" id="email" class="email" placeholder="输入邮箱地址" oncontextmenu="return false" onpaste="return false" />
            <span id="code" style="float: right">获取邮箱验证码</span>
        </div>
        <div>
          {{--  <a href=""><span id="code">获取邮箱验证码</span></a>--}}
            <input type="text" name="code" class="verify" placeholder="输入邮箱验证码">
        </div>

        <button id="submit" type="submit">注 册</button>
    </form>
    <a href="index/login">
        <button type="button" class="register-tis">已经有账号？</button>
    </a>
    <br>
    <br>
    <br>
    <br>


</div>


<script src="js/jquery.min.js"></script>
<script src="js/common.js"></script>
<!--背景图片自动更换-->
<script src="js/supersized.3.2.7.min.js"></script>
<script src="js/supersized-init.js"></script>
<!--表单验证-->
<script src="js/jquery.validate.min.js?var1.14.0"></script>
<script>
    $('#code').click(function () {
        email=$('#email').val();
       $.get('send',{email:email},function (msg) {

       })
    })
</script>
</body>
</html>