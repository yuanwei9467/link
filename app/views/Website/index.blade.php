@extends('layout')



@section('content')
<link rel="stylesheet" href="/app/css/page_log_reg_v1.css" >
<link rel="stylesheet" href="/app/css/app.css">
 
<div class="row">
	@include('Member.left')
	<div class="col-md-9">
        <h1><a href="<?php echo url('website/add')?>"><button class="btn-u btn-u-green" type="button">新增</button></a></h1>

		<div class="panel panel-green margin-bottom-40">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-tasks"></i> Basic Table</h3>
                    </div>
                    <div class="panel-body">
                        <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>                                      
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>网站名称</th>
                                <th class="hidden-sm">网站地址</th>
                                <th>分类</th>
                                <th>添加时间</th>
                                <th>状态</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($websiteList as $key => $website) {?>
                                
                            
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td></td>
                                <td class="hidden-sm">Otto</td>
                                <td>@mdo</td>
                                <td><span class="label label-warning">Expiring</span></td>                          
                            </tr>
                          <?php }?>  
                        </tbody>
                    </table>
                </div>
	</div>

</div><!--/row-->
@stop