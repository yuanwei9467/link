@extends('layout')



@section('content')
<link rel="stylesheet" href="/app/css/page_log_reg_v1.css" >
<link rel="stylesheet" href="/app/css/app.css">
<div class="row">
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <form class="reg-page">
            <div class="reg-header">
                <h2>账号登陆</h2>
            </div>

            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input placeholder="用户名" class="form-control" type="text">
            </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input placeholder="密码" class="form-control" type="password">
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label class="checkbox"><input type="checkbox"> 记住我</label>
                </div>
                <div class="col-md-6">
                    <button class="btn-u pull-right" type="submit">登陆</button>
                </div>
            </div>

            <hr>

            <h4>忘记密码 ?</h4>
            <p>别担心, <a class="color-green" href="#">点击这里</a>
                           找回密码</p>
        </form>
    </div>
</div><!--/row-->
@stop