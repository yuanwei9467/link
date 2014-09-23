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
                                    {{$member.username}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
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