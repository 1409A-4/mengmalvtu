<!DOCTYPE html>
<html lang="en">

<head>
    <title>后台管理</title>
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
            <div class="page-title">欢迎<font face="Algerian"></font>登录</div>
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
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="text-center mbl"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="border: 5px solid #fff; box-shadow: 0 2px 3px rgba(0,0,0,0.25);" class="img-circle" />
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <tbody>
                            <tr>
                                <td width="50%">账户</td>
                                <td><span class="label label-info">{{session('u_name')}}</span></td>
                            </tr>
                            <tr>
                                <td width="50%">邮箱</td>
                                <td><span class="label label-pink"></span></td>
                            </tr>
                            <tr>
                                <td width="50%">注册时间</td>
                                <td><span class="label label-primary"></span></td>
                            </tr>
                            <tr>
                                <td width="50%">上次登录</td>
                                <td><span class="label label-success"></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">登录IP</td>
                                <td><span class="label label-dark"></span></td>
                            </tr>
                            <tr>
                                <td width="50%">状态</td>
                                <td>
                                    @if(1)
                                        <span class="label label-success">正常</span>
                                        @else
                                        <span class="label label-danger">正常</span>
                                    @endif
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">修改密码</div>
                            <div class="panel-body pan">
                                <form action="admin/login/uppwd" class="form-horizontal" method="post">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-body pal">
                                        <div class="form-group">
                                                <div class="input-icon right"><i class="fa fa-lock"></i>
                                                    <input id="inputPassword" type="password" placeholder="原密码"id="u_pwd" name="u_pwd" class="form-control" />
                                                </div>
                                        </div>
                                    </div>
                                    <div class="form-body pal">
                                        <div class="form-group">
                                            <div class="input-icon right"><i class="fa fa-lock"></i>
                                                <input id="inputPassword" type="password" placeholder="新密码"name="u_repwd" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions pal">
                                        <div class="form-group mbn">

                                                <button type="submit" class="btn btn-primary btn-block">确认修改</button>
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
        </div>
    </div>
    <!--END CONTENT-->
</div>
@include('admin.public.foot')
</body>
</html>