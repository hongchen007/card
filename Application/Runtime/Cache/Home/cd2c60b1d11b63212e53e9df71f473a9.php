<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>金融理财知识</title>
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
            <b>金融理财知识</b>
          </div>
         <div id="detai_list">
              
              <p><span>1</span>理财资源，要清楚自己的财务资源有哪些</p>
              <ul>
                  <li>*家庭税后年收入达多少万元，年支出 多少万元，净储蓄率为多少（储蓄-投资=净储蓄）<li>
                  <li>*固定资产的升值部分<li>
                  <li>*之前投资的收益<li>
              </ul>
             <p><span>2</span>生活目标，要对自己的生活目标有清醒的认识</p>
               <ul>
             
                 <li>*例如：老人的每月赡养费用2000元，每年回老家探亲支出 2 万元<li>
                 <li>*例如：年内希望可以出国旅游一次，预算 3 万元，希望能够实现每年旅游预算万元的目标，持续 40 年<li>
                 <li>*例如：希望能储备足够的退休金，预算每月支出现值 1 万元，条件允许的话想早点退休<li>
                 <li>*例如：子女教育支出平均水平即可，只有在资源充裕的条件下才考虑出国留学<li>
                 <li>*例如：2年换房提升生活质量<li>
                </ul>
             <p><span>3</span>要有一系列统一协调的计划，要保证所有的计划不会冲突，协调起来都能够实现</p>
             <ul>
                 <li>*保险计划、投资计划<li>
                 <li>*教育计划、房产计划<li>
                 <li>*所得税计划、退休计划<li>
                 <li>用现金流的管理把所有的计划综合在一起，协调所有计划，并让所有计划能够满足你的资金流<li>
             </ul>
             <p>
                <span>注</span>
                个人理财就是通过对财务资源的适当管理来实现个人生活目标的一个过程，是一个为实现整体理财目标设计的统一的互相协调的计划。这个计划有三个核心理念
              </p>
         </div>
      </div>
</div>
<ul class="footer">
    <li><a href="http://<?php echo C('url1');?>/card/index.php/Home/Login/index"><img src="/card/Public/123/images/li_33.jpg"><br><br>加入会员</a></li>
    <li><a href="http://<?php echo C('url1');?>/card/index.php/Home/Card/newknow"><img src="/card/Public/123/images/li_42.jpg"><br><br>新手帮助</a></li>
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