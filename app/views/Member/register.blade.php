@extends('layout')



@section('content')
<link rel="stylesheet" href="/app/css/validationEngine.jquery.css" >
<link rel="stylesheet" href="/app/css/template.css" >
<div class="row">
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <form class="reg-page" id="form">
            <div class="reg-header">
                <h2>注册一个新账户</h2>
                <p>已经有账户了？点击这里 <a href="<?php url('member/login')?>" class="color-green">登陆</a>     你的账号 .</p>
            </div>

            <label>用户名</label>
            <input class="form-control margin-bottom-20 validate[required]" type="text" name="username">


            <label>邮箱 <span class="color-red">*</span></label>
            <input class="form-control margin-bottom-20" type="text" name="email">

            <div class="row">
                <div class="col-sm-6">
                    <label>密码 <span class="color-red">*</span></label>
                    <input class="form-control margin-bottom-20" type="password"  name="password">
                </div>
                <div class="col-sm-6">
                    <label>确认密码 <span class="color-red">*</span></label>
                    <input class="form-control margin-bottom-20" type="password" name="repassword">
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-lg-6">
                    <label class="checkbox">
                        <input type="checkbox">
                      我已经阅读       <a href="http://htmlstream.com/preview/unify-v1.5/page_terms.html" class="color-green">协议和条款</a>
                    </label>
                </div>
                <div class="col-lg-6 text-right">
                    <button class="btn-u" type="submit">注册</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="/app/js/jquery.validationEngine.js" async="" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        jQuery("#form").validationEngine({
            notEmpty: true
        })
    });
</script>
@stop

