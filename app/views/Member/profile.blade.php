@extends('layout')



@section('content')
<link rel="stylesheet" href="/app/css/page_log_reg_v1.css" >
<link rel="stylesheet" href="/app/css/app.css">
 
<div class="row">
	@include('Member.left')
	<div class="col-md-9">
		<div class="panel panel-green margin-bottom-40">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-tasks"></i>账号维护</h3>
                    </div>
                    <div class="panel-body">                                                      
                        <form class="form-horizontal" role="form">
                        	<h4>基本信息</h4>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 control-label">用户名</label>
                                <div class="col-lg-10">
                                    <?php echo $member['username']?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword1" class="col-lg-2 control-label">手机号码</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control"  placeholder="手机号码" name="mobile" value="<?php echo $member['mobile']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword1" class="col-lg-2 control-label">电子邮箱</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control"  placeholder="电子邮箱" name="email" value="<?php echo $member['email']?>">
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="inputPassword1" class="col-lg-2 control-label">固定电话</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control"  placeholder="固定电话" name="telephone" value="<?php echo $member['telephone']?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword1" class="col-lg-2 control-label">QQ</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control"  placeholder="QQ" name="telephone" value="<?php echo $member['qq']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword1" class="col-lg-2 control-label">地址</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control"  placeholder="地址" name="address" value="<?php echo $member['address']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn-u btn-u-green">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
        </div>
	</div>

</div><!--/row-->
@stop