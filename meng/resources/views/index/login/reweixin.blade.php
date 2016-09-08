<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="{{URL::asset('/')}}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>猛犸旅途注册表单</title>
    <link rel="stylesheet" href="./css/style.css" />
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
    <form action="{{URL('login/regiswei')}}" method="post" id="registerForm">
        <p>您还没有绑定帐号,请先注册本站帐号</p>
        <div>
            <input type="hidden" name="appid" value="{{$appid}}">
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


        <button id="submit" type="submit">注 册</button>
    </form>

    <br>
    <br>
    <br>
    <br>


</div>


<script src="./js/jquery.min.js"></script>
<script src="./js/common.js"></script>
<!--背景图片自动更换-->
<script src="./js/supersized.3.2.7.min.js"></script>
<script src="./js/supersized-init.js"></script>
<!--表单验证-->
<script src="./js/jquery.validate.min.js?var1.14.0"></script>
<script>
    $('#code').click(function () {
        email=$('#email').val();
        $.get('send',{email:email},function (msg) {

        })
    })
</script>
</body>
</html>