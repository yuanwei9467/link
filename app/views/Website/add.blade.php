@extends('layout')
@section('content')

<link rel="stylesheet" href="/app/css/app.css">
 <link rel="stylesheet" href="/app/css/custom-sky-forms.css" >
<div class="row">
	@include('Member.left')
	<div class="col-md-9">
        <div class="panel panel-green margin-bottom-40">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-tasks"></i>账号维护</h3>
                    </div>
                    <div class="panel-body">                                                      
                        <form class="form-horizontal sky-form" role="form">
                            <h4>基本信息</h4>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 control-label">网站地址</label>
                                <div class="col-lg-10">
                                     <input type="text" class="form-control"  placeholder="网站地址" name="url" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword1" class="col-lg-2 control-label">网站名称</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control"  placeholder="网站名称" name="name" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword1" class="col-lg-2 control-label">分类</label>
                                <div class="col-lg-10">
                                    <label class="select">
                                <select>
                                    <option value="0">Choose name</option>
                                    <option value="1">Alexandra</option>
                                    <option value="2">Alice</option>
                                    <option value="3">Anastasia</option>
                                    <option value="4">Avelina</option>
                                </select>
                                <i></i>
                            </label>
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="inputPassword1" class="col-lg-2 control-label">描述</label>
                                <div class="col-lg-10">
                                    <label class="textarea">
                                        <textarea rows="3"></textarea>
                                    </label>
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