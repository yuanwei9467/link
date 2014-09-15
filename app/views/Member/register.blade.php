@extends('layout')



@section('content')
<script type="text/javascript" src="/app/js/jquery-1.js"></script>
<script src="/app/js/jquery.validationEngine.js" type="text/javascript"></script>
<script src="/app/js/jquery.validationEngine-zh_CN.js" type="text/javascript"></script>
<link rel="stylesheet" href="/app/css/validationEngine.jquery.css" >
<link rel="stylesheet" href="/app/css/page_log_reg_v1.css" >
<link rel="stylesheet" href="/app/css/template.css" >
<div class="row">
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <form class="reg-page" id="form" action="<?php echo url('member/register')?>" method="post">
            <div class="reg-header">
                <h2>注册一个新账户</h2>
                <p>已经有账户了？点击这里 <a href="<?php url('member/login')?>" class="color-green">登陆</a>     你的账号 .</p>
            </div>

            <label>用户名</label>
            <input class="form-control margin-bottom-20 validate[required]" type="text" name="username">


            <label>邮箱 <span class="color-red">*</span></label>
            <input class="form-control margin-bottom-20 validate[required,custom[email]]" type="text" name="email">

            <div class="row">
                <div class="col-sm-6">
                    <label>密码 <span class="color-red">*</span></label>
                    <input class="form-control margin-bottom-20 validate[required]" type="password"  name="password" id="password">
                </div>
                <div class="col-sm-6">
                    <label>确认密码 <span class="color-red">*</span></label>
                    <input class="form-control margin-bottom-20 validate[required,equals[password]]" type="password" name="repassword" id="repassword">
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-lg-6">
                    <label class="checkbox">
                        <input type="checkbox" class="validate[required]" name="agreement">
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

<script>
    $(document).ready(function(){
        jQuery("#form").validationEngine({
            notEmpty: true
        })
    });
</script>
@stop

