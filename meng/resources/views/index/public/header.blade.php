<!--header -->
<header>
    <div class="wrapper">
        <h1><a href="{{URL('/')}}" id="logo">Air lines</a></h1>
        <span id="slogan">Fast, Frequent &amp; Safe Flights</span>
        <nav id="top_nav">
            @if(Request::session()->has('uname'))

                <ul>
                    <li><a href="" class="nav1"><?php echo Request::session()->get('uname')?></a></li>
                    <li><a href="{{URL('index/register')}}" class="nav2">用户中心</a></li>
                    <li><a href="{{URL('login/loginout')}}" class="nav3">退出</a></li>
                </ul>
            @else
                <ul>
                    <li><a href="{{URL('/')}}" class="nav1">首页</a></li>
                    <li><a href="{{URL('index/register')}}" class="nav2">注册</a></li>
                    <li><a href="{{URL('index/login')}}" class="nav3">登录</a></li>
                </ul>
            @endif

        </nav>
    </div>
    <nav>
        <ul id="menu">
            <li id="menu_active"><a href="{{URL('/')}}"><span><span>首页</span></span></a></li>
            <li><a href="{{URL('index/offers')}}"><span><span>价格</span></span></a></li>
            <li><a href="{{URL('index/book')}}"><span><span>书</span></span></a></li>
            <li><a href="{{URL('index/services')}}"><span><span>服务</span></span></a></li>
            <li><a href="{{URL('index/safe')}}"><span><span>安全</span></span></a></li>
            <li class="end"><a href="{{URL('index/contacts')}}"><span><span>联系我们</span></span></a></li>
        </ul>
    </nav>
</header><div class="ic">More Website Templates @ <a href="http://www.cssmoban.com/" >网页模板</a>!</div>
<!-- / header -->