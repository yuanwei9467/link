@extends('layout')
@section('content')
<link rel="stylesheet" href="/app/css/sky-forms.css" >
<style type="text/css">
.sky-form {
  box-shadow: none;
  border: 1px solid #eee;
}

.sky-form header {
  color: inherit;
  display: block;
  font-size: 20px;
  background: #fff;
  font-weight: 400;
  padding: 8px 30px;
}

.sky-form fieldset {
  background: #fff;
}

.sky-form footer {
  background: #fff;
  padding: 15px 30px;
}

.sky-form a {
  color: inherit;
}

.sky-form a.btn-u {
  color: #fff;
}

.sky-form .input input {
  height: 34px;
  padding: 6px 12px;
}

.sky-form .input input,
.sky-form .select select,
.sky-form .textarea textarea {
  border-width: 1px;
  font-size: 14px;
  color: #404040;
}

.sky-form .select select {
  height: 34px;
  padding: 6px 10px;
}

.sky-form .select-multiple select {
  height: auto;
}

/**/
/* file inputs */
/**/
.sky-form .input-file .button {
  height: 32px;
  top: 1px;
  right: 1px;
}

/**/
/* captcha inputs */
/**/
.sky-form .input-captcha img {
  position: absolute;
  top: 1px;
  right: 1px;
  border-left: 1px solid #e5e5e5;
}


/**/
/* normal state */
/**/
.sky-form .input input,
.sky-form .select select,
.sky-form .textarea textarea,
.sky-form .radio i,
.sky-form .checkbox i,
.sky-form .toggle i,
.sky-form .icon-append,
.sky-form .icon-prepend {
  border-color: #bbb;
}
.sky-form .toggle i:before {
  background-color: #999;  
}

.sky-form .button {
  background: #72c02c;
}

/**/
/* toggles */
/**/
.sky-form .toggle {
	font-weight: normal;
}

.sky-form .toggle i {
  width: 54px;
  height: 21px;
  border-width: 1px;
}
.sky-form .toggle i:after {
  top: 3px;
}
.sky-form .toggle i:before {
  top: 5px;
  right: 6px;
}

/*(remove Bootstrap 'radio, checkbox' margin-top)
--------------------------------------------------*/
.radio, .checkbox {
  margin-top: 0;
}

/**/
/* radios and checkboxes */
/**/
.sky-form .radio i,
.sky-form .checkbox i {
  width: 17px;
  height: 17px;
  border-width: 1px;
}

.sky-form .checkbox input + i:after {
  top: 2px;
  left: 0;
  font: normal 10px FontAwesome;
}

/**/
/* checked state */
/**/
.sky-form .radio input + i:after {
  top: 5px;
  left: 5px;
  background-color: #999;  
}
.sky-form .checkbox input + i:after {
  color: #999;
}
.sky-form .radio input:checked + i,
.sky-form .checkbox input:checked + i,
.sky-form .toggle input:checked + i {
  border-color: #999;  
}
.sky-form .rating input:checked ~ label {
  color: #72c02c; 
}

/**/
/* selects */
/**/
.sky-form .select i {
  top: 14px;
  width: 9px;
  right: 13px;
  height: 6px;
}
.sky-form .select i:after,
.sky-form .select i:before {
  top: 4px;
}
.sky-form .select i:before {
  top: -2px;
  border-bottom: 4px solid #404040;
}

.label-rounded .ui-slider-handle {
  border-radius: 50% !important;
}

/**/
/* icons */
/**/
.sky-form .icon-append,
.sky-form .icon-prepend {
  top: 1px;
  height: 32px;
  font-size: 14px;
  line-height: 33px;
  background: inherit;
}
.sky-form .icon-append {
  right: 1px;
  padding: 0 3px;
  min-width: 34px;
}

.sky-form .icon-prepend {
  left: 6px;
  padding-right: 5px;
}

/**/
/* focus state */
/**/
.sky-form .input input:focus,
.sky-form .select select:focus,
.sky-form .textarea textarea:focus {
 	border-color: #bbb;
  box-shadow: 0 0 2px #c9c9c9;	
}

.sky-form .radio input:focus + i,
.sky-form .checkbox input:focus + i,
.sky-form .toggle input:focus + i {
  border-color: #999;
  box-shadow: none;
}

/**/
/* hover state */
/**/
.sky-form .input:hover input,
.sky-form .select:hover select,
.sky-form .textarea:hover textarea {
	border-color: #999;
}

.sky-form .radio:hover i,
.sky-form .checkbox:hover i,
.sky-form .toggle:hover i,
.sky-form .ui-slider-handle:hover {
  border-color: #999;
}
.sky-form .rating input + label:hover,
.sky-form .rating input + label:hover ~ label {
  color: #bbb;
}

.sky-form .icon-append,
.sky-form .icon-prepend {
  color: #b3b3b3;
}

/**/
/* disabled state */
/**/
.sky-form .input.state-disabled:hover input,
.sky-form .select.state-disabled:hover select,
.sky-form .textarea.state-disabled:hover textarea,
.sky-form .radio.state-disabled:hover i,
.sky-form .checkbox.state-disabled:hover i,
.sky-form .toggle.state-disabled:hover i {
  border-color: #bbb;
}

/**/
/* datepicker */
/**/
.ui-datepicker-header {
  padding: 10px 0;
  font-size: 16px;
}

.ui-datepicker-inline {
  border-width: 1px;
}

.ui-datepicker-inline .ui-datepicker-header {
  line-height: 27px;
}

.ui-datepicker-prev, 
.ui-datepicker-next {
  font-size: 18px;
  line-height: 47px;
}

.ui-datepicker-calendar a {
  border: 1px solid transparent;
}

.ui-datepicker-calendar .ui-state-active {
  background: inherit;
  border: 1px solid #bbb;
}
.ui-datepicker-calendar a:hover {
  background: inherit;  
  border: 1px solid #bbb;
}

/**/
/* bootstrap compatibility */
/**/
.sky-form button *,
.sky-form button *:after,
.sky-form button *:before {
  margin: 0 auto;
  padding: 0 auto;
}

.btn-u.button-uploading:after {
  top: 6px;
}
.btn-u.btn-u-lg.button-uploading:after {
  top: 10px;
}
.btn-u.btn-u-sm.button-uploading:after {
  top: 3px;
}
.btn-u.btn-u-xs.button-uploading:after {
  top: 2px;
}

.label {
  padding: 0.2em 0 0.3em;
}
</style>
<div class="row margin-bottom-30">
        	<!-- Welcome Block -->
    		<div class="col-md-8 md-margin-bottom-40">
    			<div class="headline"><h2>欢迎来到一起推吧</h2></div>
                <div class="row">
                   <p>

全球首创：

 

      17T8免费广告交换互换联盟是长沙一起推吧网络科技有限公司首创的免费+收费广告2合1模式，彻底打破了传统广告联盟只有收费广告模式的瓶颈，解决了中小网站流量小、收益少的布局格式。在SEO为王的时代，网站被搜索引擎封杀、外链过少、排名过低、内文发不出去、网站收入小等问题已经成为中小站长们最头痛的问题。如何提高网站PR值、alexa世界排名已经成为重中之重。由于首页篇幅原因，在此大体向各位CEO简单的阐述，深入了解可下载本站的帮助文档。17T8采用1:N模式进行广告互换，并严格按照1：1返回流量模式,1:N指用户可以获取1：1或1：24或1：50或更多的免费交换广告尺寸，假设站长生成投放的是1：24的广告代码，那么贵站将同时随机与本联盟的24个成员网站进行免费广告互换，如果有用户通过广告代码点击进入到24个网站的其中十个网站，则该十个网站将一直给贵站免费广告，直到把点击数返还完。假设贵站点击流量非常大，其它网站无法返还完击，则生成积分，积分可以出售并兑换成现金提现。除积分可以提现以外，用户还可以通过设置投放商业广告，在赚取流量的同时直接赚取T币。每100T币等于100RMB,满100RMB即可提现，每周四打款。免费互换广告以普通文本显示，商业广告以红色加粗展示，以便站长区分。站长可以根据网站流量自行调整免费广告与商业广告的展示配额。在赚取现金的同时，让你赚足流量。平时3000IP每天的网站，免费加入本联盟后流量立即倍增。本系统拥有强大的防做弊分析、竞价排名、区域投放、类别投放、时段投放、流量分析等功能。采用文明链接方式增加PR值，以联盟成员URL来路计费方式，严格的审查与举报制度，谢绝一切非法网站。在加入本免费广告交换平台后请使用第三方统计，进行效果查看。本联盟绝对100%正平公正，只收取5%的服务费用于服务器维护。本联盟提供免费站长认证服务，方便站长与站长之间的联系与沟通，欢迎认证。后期我们还将增加CPM弹窗广告、CPV富媒体广告、CPA注册等广告方式。
                   </p>
                </div>

            </div><!--/col-md-8-->        

            <!-- Latest Shots -->
            <div class="col-md-4">
    			<div class="headline"><h2>会员登录</h2></div>
    			<form class="sky-form" id="sky-form1" action="<?php echo url('member/login');?>" method="post" novalidate="novalidate">
                            
                            
                            <fieldset>                  
                                <section>
                                    <div class="row">
                                        <label class="label col col-4">用户名</label>
                                        <div class="col col-8">
                                            <label class="input">
                                                <i class="icon-append fa fa-user"></i>
                                                <input type="" name="username">
                                            </label>
                                        </div>
                                    </div>
                                </section>
                                
                                <section>
                                    <div class="row">
                                        <label class="label col col-4">密码</label>
                                        <div class="col col-8">
                                            <label class="input">
                                                <i class="icon-append fa fa-lock"></i>
                                                <input type="password" name="password">
                                            </label>
                                            <div class="note"><a class="modal-opener" href="#sky-form2">忘记密码?</a></div>
                                        </div>
                                    </div>
                                </section>
                                
                                <section>
                                    <div class="row">
                                        <div class="col col-4"></div>
                                        <div class="col col-8">
                                            <label class="checkbox"><input type="checkbox" checked="" name="remember"><i></i>记住我</label>
                                        </div>
                                    </div>
                                </section>
                                <section>
                                	<div class="row">
                                		 <div class="col col-3"></div>
                                		 <div class="col col-2">
                                		 	<button class="btn-u" type="submit">登录</button>
	                                		
                                		 </div>
                                		 <div class="col col-1"></div>
                                		 <div  class="col col-2"><a class="btn-u btn-u-default" href="<?php echo url('member/register');?>">注册</a></div>
	                                	
                                	</div>
                                </section>
                            </fieldset>
                            <footer>
                                
                            </footer>
                        </form>
            </div><!--/col-md-4-->
    	</div>
@stop