<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新手帮助</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <link href="font-awesome-4.3.0/css/font-awesome.css" rel="stylesheet">
    
    <link href="/card/Public/123/css/credit.css" rel="stylesheet">
    <script src="/card/Public/123/js/jquery-3.1.0.js"></script>
	
</head>
<body>
<div class="code">
      
      <div class="particulars">
          <div class="arrow2">
          	<img src="/card/Public/123/images/arrow_03.jpg">
          	<b>新手指南</b>
          </div>
         <div id="detai_list">
         	  
              <p><span>1</span>晓数点新手注册指南</p>
			  <ul>
				  <li>*关注晓数点微信公众号后，会有相关推送提醒您点击注册钱宝会员<li>
				  <li>*或者您可一点击最走侧的会员专区框选择注册会员<li>
				  <li>*在此页面您可以选择注册金卡会员还是银卡会员进行相应的充值即可成为晓数点的钱宝会员<li>
              </ul>
             <p><span>2</span>如何投资理财</p>
			   <ul>
			 
				 <li>*您可根据个人的具体情况进行相应的理财活动，还可以推广自己的二级会员已获得更多的提现金额<li>
				 <li>*平台支持提现，您可在会员中心选择提现到银行卡或支付宝<li>
				 <li>*成为会员之后，您还可在会员中心页面看到自己相应的金额<li>
				</ul>
             <p><span>3</span>借助互联网发展趋势，为会员提供兼职赚钱机会，实现平台与会员互惠共赢。</p>
			 <ul>
				 <li>*帮助会员提高金融理财相关知识<li>
				 <li>*为会员提供管理规范、客源充足的销售平台<li>
				 <li>*为会员提供货真价实、物美价廉的购物平台<li>
				 <li>*（采用三级分销模式，佣金实行当天 、秒结）<li>
				 <li>1、88元注册银卡会员，推广会员注册得60%推广费用<li>
				 <li>2、388元注册金卡会员，公司赠送0.5%-0.65%移动刷卡软件，一级会员得35%推广费用，二级会员得15%推广费用，三级会员得20%推广费用<li>
				 <li>所有推广返利均是秒结算，剩余费用转入公司账户<li>
				 <li>会员帮助平台提升市场知名度<li>
				 <li>平台帮助会员汇总团队信息提高凝聚力加快发展速度<li>
			 </ul>
         </div>
      </div>
</div>
<ul class="footer">
    <li><a href="http://<?php echo C('url1');?>/card/index.php/Home/Login/index"><img src="/card/Public/123/images/li_33.jpg"><br><br>加入会员</a></li>
    <li style="background: #FEEF8A;"><a href="javascript:;"><img src="/card/Public/123/images/li_42.jpg"><br><br>新手帮助</a></li>
    <li><a href="http://<?php echo C('url1');?>/card/index.php/Home/Card/pushknow"><img src="/card/Public/123/images/li_39.jpg"><br><br>我要推广</a></li>
    <li><a href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=<?php echo C('const.appid');?>&redirect_uri=http%3a%2f%2f<?php echo C('url1');?>%2fcard%2findex.php%2fHome%2fCard%2fhuiyuanzhongxin&response_type=code&scope=snsapi_base&state=123#wechat_redirect"><img src="/card/Public/123/images/li_36.jpg"><br><br>个人中心</a></li>
</ul>

</body>
</html>
<script>
		var _width = document.documentElement.clientWidth || document.body.clientWidth;
            document.documentElement.style.fontSize = _width /640 * 100 + "px";
        window.onresize = function () {
            var _width = document.documentElement.clientWidth || document.body.clientWidth;
            document.documentElement.style.fontSize = _width /640 * 100 + "px";
        };

		var _detail_list=document.getElementById("detai_list");
		var _p=_detail_list.getElementsByTagName("p");
		var _ul=_detail_list.getElementsByTagName("ul");
		
		for(var i=0;i<_p.length;i++){
			_p[i].index=i;
			_p[i].off=true;
			_p[i].onclick=function(){
			var _index=this.index;
				if(this.off){	
					$(_ul[_index]).slideDown();
				}else { 
					$(_ul[_index]).css("display","none")
				
				}
				this.off=!this.off;
			}
		}  
</script>