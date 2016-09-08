<!DOCTYPE html>
<html>
<head>
    <base href="{{URL::asset('/')}}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>个人主页</title>
    <meta name="Keywords" content="大融小贷 个人主页" />
    <meta name="Description" content="大融小贷 个人主页" />
    @include('index.public.links')
    <link href="./css/UserCSS.css" rel="stylesheet" type="text/css" />
    <script src="./js/jquery.min.js" type="text/javascript"></script>
    <script src="./js/ops.js" type="text/javascript"></script>
    <script src="./js/UserJS.js" type="text/javascript"></script>
</head>
<body>
<div class="main">
@include('index.public.header')
<div class="row" style="margin-top: 10px;">
</div>

<div class="row">
    <div class="u-menu">
        <ul class="u-nav" id="user_menu">
            <li class="item" id="user_menu_my" name="user_menu_my">
                <h3 class="t1">
                    个人主页<span title="折叠"></span></h3>
                <ul class="sub">
                    <li>{{--<a class="current" href="个人主页.htm">个人主页</a></li><li>--}}<a href="个人资料.htm">个人资料</a></li><li>
                        <a href="认证管理.htm">认证管理</a></li><li><a href="密码管理.htm">密码设置</a></li><li><a href="推荐有奖.htm">推荐有奖</a></li></ul>
            </li>

        </ul>
        <script type="text/javascript">
            var menuClosed = Ops.getCookie('menuClosed');

            $(".item h3 span").click(function () {

                menuClosed = Ops.getCookie('menuClosed');
                if (menuClosed == undefined || menuClosed == null) {
                    menuClosed = '';
                    Ops.setCookie('menuClosed', menuClosed);
                }
                //console.log(menuClosed+',click;;;');
                $(this).parent().parent().toggleClass('bg-slide');
                $(this).parent().parent().find(".sub").slideToggle('fast');

                if ($(this).attr('title') == '折叠') {
                    $(this).attr('title', '展开');
                } else {
                    $(this).attr('title', '折叠');
                }

                var pid = $(this).parent().parent().attr('id');

                if ($(this).parent().parent().hasClass('bg-slide') && menuClosed.indexOf("#" + pid + "#") == -1) {
                    var cookies = menuClosed + '#' + pid + '#';
                } else {
                    var cookies = menuClosed.replace("#" + pid + "#", '');
                }
                Ops.setCookie('menuClosed', cookies);
            });

            if (menuClosed != null) {
                var closedMatch = menuClosed.match(/([a-z_]+)/g);
                for (var i in closedMatch) {
                    var idObj = $('#' + closedMatch[i]);
                    idObj.toggleClass('bg-slide');
                    idObj.find(".sub").hide();
                    idObj.find('h3 span').attr('title', '展开');
                }
            } else {
                $("#user_menu_loan h3 span").click();
            }
        </script>
    </div>
    <!-- /.u-menu -->

    <div class="u-main">
        <div class="ucenter">
            <div class="ucenter-info mt10">
                <div class="info-title">
                    <h5>
                        我的个人主页</h5>
                </div>
                <div class="info">
                    <ul class="info-img">


                        <li><img src="{{$uimg}}" class="avatar" /></li></ul>

                    <div class="info-main">
                        <div class="row">
                            <label>
                                用户名：</label>{{$uname}}</div>
                        <div class="row">
                            <label>
                                注册时间：</label>{{$created_at}}</div>
                        <div class="row">
                            <label>
                                所在地：</label>{{$ip}}</div>
                        <div class="row">
                            <label>
                                角色：</label><span class="orange">普通会员 &nbsp;&nbsp; 借入者</span></div>
                        <div class="row">
                            <label>
                                积分统计：</label><span class="orange">50</span>&nbsp;积分
                        </div>
                    </div>
                    <div class="clear">
                    </div>
                </div>
            </div>
            <div class="ucenter-info mt10">
                <div class="ucenter-tab-box">
                    <ul class="u-tab clearfix">
                        <li class="current"><a>我关注的用户</a></li>
                        <li><a>关注我的用户</a></li>
                        <li><a>投标记录</a></li>
                        <li><a>贷款记录</a></li>
                    </ul>
                </div>
                <div id="tab_box">
                    <div class="u-form-wrap">
                        <div>
                            这是我关注的用户</div>
                    </div>
                    <div class="u-form-wrap" style="display: none;">
                        <div>
                            这是关注我的用户</div>
                    </div>
                    <div class="u-form-wrap" style="display: none;">
                        <div>
                            这是我的投标记录</div>
                    </div>
                    <div class="u-form-wrap" style="display: none;">
                        <div>
                            这是我的贷款记录</div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">

                var $div_li = $(".ucenter-tab-box ul li");

                $div_li.click(function () {

                    $(this).addClass("current").siblings().removeClass("current");

                    var div_index = $div_li.index(this);

                    $("#tab_box>div").eq(div_index).show().siblings().hide();

                }).hover(function () {

                    $(this).addClass("hover");

                }, function () {

                    $(this).removeClass("hover");

                });

            </script>
        </div>
        <!-- /.u-main -->
    </div>
</div>
</body>
</html>
