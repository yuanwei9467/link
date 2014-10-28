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
                        <form class="form-horizontal sky-form" role="form" action="<?php echo url('website/add')?>" method="post">
                            <h4>基本信息</h4>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 control-label">网站地址</label>
                                <div class="col-lg-10">
                                     <input type="text" class="form-control"  placeholder="网站地址" name="url" value="<?php echo $website->url;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword1" class="col-lg-2 control-label">网站名称</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control"  placeholder="网站名称" name="name" value="<?php echo $website->name;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword1" class="col-lg-2 control-label">状态</label>
                                <div class="col-lg-10">
                                    <select name="status">
                                        <option value="0" <?php if($website->status ==0){echo 'selected';}?>>暂停</option>
                                        <option value="1" <?php if($website->status ==1){echo 'selected';}?>>启用</option>
                                    <select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword1" class="col-lg-2 control-label">分类</label>
                                <div class="col-lg-10">
                                    <label class="select">
                                <select name="category_id">
                                    
                                    <option value="0">请选择</option>
                                    <?php foreach($websiteCategoryList as $key => $value){?>
                                        <option value="<?php echo $value->id;?>" <?php if($value->id == $website->category_id){echo 'selected';}?>><?php echo $value->name;?></option>
                                    <?php }?>
                                </select>
                                <i></i>
                            </label>
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="inputPassword1" class="col-lg-2 control-label">描述</label>
                                <div class="col-lg-10">
                                    <label class="textarea">
                                        <textarea rows="3" name="describe"><?php echo $website->describe;?></textarea>
                                    </label>
                                </div>
                            </div>
                             
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn-u btn-u-green">修改</button>
                                </div>
                            </div>
                        </form>
                    </div>
        </div>
	</div>

</div><!--/row-->
@stop