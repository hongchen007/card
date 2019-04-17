<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
 <head> 
  <meta charset="utf-8" /> 
  <link href="http://cy.hckmall.com/shop/news_css/font-awesome.min.css" rel="stylesheet" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <script language="javascript" src="http://cy.hckmall.com/shop/js/jquery-1.11.1.min.js"></script> 
  <script language="javascript" src="/card/Public/123/js/jquery-1.8.3.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="http://cy.hckmall.com/shop/news_css/style.css" />
 </head> 
 <body> 
  <title>商品详情</title> 
  <style type="text/css">
body {margin:0px; background:#eee; font-family:'微软雅黑'; -moz-appearance:none; -webkit-appearance: none;}
ul,li {padding:0px; margin:0px;}
.good_topbar { width:100%;position:fixed; top:0px; height:40px;z-index: 8;line-height:35px;}
.good_topbar .left { float:left; width:30px;height:30px;margin-left:10px;margin-top:5px;}
.good_topbar .right { float:right; width:80px;height:30px;margin-left:10px;margin-top:5px;}

.good_topbar .btn { background:rgba(237,237,237,0.5); width:30px;height:30px;margin-left:5px;border-radius:30px;float:left;background:#efefef;color:#333;line-height:30px;text-align:center; }

.good_img {height:300px; width:100%; background:#ccc;}
.good_img img {height:100%; width:100%;}
.good_info1 {height:auto; width:94%; background:#fff; padding:0px 3%; border-bottom:1px solid #e2e2e2;}
.good_info1 .info1 {height:38px; width:100%; border-bottom:1px dashed #f3f3f3; padding:11px 0px;}
.good_info1 .info1 .name {height:38px; width:65%; border-right:1px solid #e3e3e3; float:left; font-size:14px; color:#666;}
.good_info1 .info1 .sub1 {height:38px; width:30%; background:#ff6500; float:right; border-radius:5px; color:#fff; text-align:center; line-height:38px;}
.good_info1 .info1 .sub1 i {height:16px; width:16px; margin-right:2px; background:#fff; border-radius:5px; color:#ff6500; line-height:18px; font-size:14px;}
.good_info1 .info2  {height:38px; width:100%; border-bottom:1px dashed #f3f3f3; padding:11px 0px;color:#666;}
.good_info1 .price {height:40px; width:100%;  font-size:18px; color:#ff6500; line-height:40px;}
.good_info1 .price span {font-size:12px; color:#999;}
.good_info1 .other {border-top:1px dashed #f3f3f3;  height:34px; width:100%;  line-height:34px; font-size:14px; color:#999;}
.good_info1 .other .left { float:left; text-align:right;}
.good_info1 .other .right { float:right; text-align:right;}

.good_speci {height:44px; width:94%; overflow: hidden; background:#fff; padding:0px 3%; margin-top:14px; border-bottom:1px solid #e2e2e2;  line-height:44px; color:#666; font-size:14px;}

.good_shop {height:130px; width:94%; background:#fff; padding:0px 3%; margin-top:14px; border-bottom:1px solid #e2e2e2;}
.good_shop .shop1 {height:50px; width:100%; padding:10px 0px; }
.good_shop .shop1 img {height:50px; width:50px; margin-right:10px; float:left;}
.good_shop .shop1 .shop_info {height:50px; width:auto; float:left; font-size:16px; color:#666; line-height:25px;}
.good_shop .shop1 .shop_info span {font-size:14px; color:#ccc;}
.good_shop .shop2 {height:59px; width:100%; padding:10px 0px;}
.good_shop .shop2 .sub1 {height:37px; width:47%; float:left; border:1px solid #e2e2e2; border-radius:3px; text-align:center; line-height:37px; font-size:16px; color:#999;}
.good_shop .shop2 .sub2 {height:37px; width:47%; float:right; border:1px solid #e2e2e2; border-radius:3px; text-align:center; line-height:37px; font-size:16px; color:#999;}

.good_info2 {height:auto; width:100%; background:#fff; margin-top:14px; }
.good_info2 .menu {height:40px; width:100%;}
.good_info2 .menu .nav {height:37px; width:100%;  float:left; font-size:14px; color:#666; text-align:center; line-height:37px; border-bottom:2px solid #e3e3e3;}
.good_info2 .menu .navon {color:#ff6500; height:37px; line-height:37px; border-bottom:2px solid #ff6500; }
.good_info2 .tab_con {height:auto; width:94%; padding:10px 3%; overflow: hidden;}
.good_info2 .tab_con .con {height:auto; display:none;color:#333;word-break:break-all;}
.good_info2 .tab_con .con .param { padding:10px; border-bottom:1px solid #ccc}
.good_info2 .tab_con #con_1 img { width:100%;outline-width:0px;  vertical-align:top; display:block}


.good_bottom {height:50px; width:100%; background:#ff6801; position:fixed; bottom:0px; left:0px;}
.good_bottom span {font-size:14px; line-height:10px;}
.good_bottom .buy {height:50px; width:35%; background:#ff6801; float:left; font-size:16px; line-height:50px; text-align:center; color:#fff;}
.good_bottom .add {height:50px; width:35%; background:#fd9a34; float:left; font-size:16px; line-height:50px; text-align:center; color:#fff;}
.good_bottom .cart {height:42px; width:15%; background:#fdfdfd; float:left; padding-top:7px; border-top:1px solid #e1e1e1; text-align:center; font-size:20px; color:#666;line-height:10px; position:relative;}
.good_bottom .cart b {height:16px; width:16px; background:#f30; border-radius:8px; position:absolute; top:2px; right:5px; font-size:12px; color:#fff; line-height:16px; font-weight:100;}
.good_bottom .like {height:42px; width:30%; background:#fdfdfd; float:left; padding-top:7px; border-top:1px solid #e1e1e1; border-right:1px solid #e1e1e1; text-align:center; font-size:20px; color:#666; line-height:10px;}

.good_copyright {font-size:14px; line-height:14px; padding:10px 0px; text-align:center; color:#aaa; padding-bottom:60px;}

/**以下是图片轮播代码**/
.good_img{overflow:hidden;position:relative;width:100%;}   
      @font-face{
        font-family:'FontAwesome';
        src:url('./fontawesome-webfont.eot?v=4.3.0');
        src:url('./fontawesome-webfont.eot?#iefix&v=4.3.0') 
        format('embedded-opentype'),url('./fontawesome-webfont.woff2?v=4.3.0') 
        format('woff2'),url('./fontawesome-webfont.woff?v=4.3.0') 
        format('woff'),url('/card/Public/123/fontawesome-webfont.ttf') 
        format('truetype'),url('./fontawesome-webfont.svg?v=4.3.0#fontawesomeregular') 
        format('svg');font-weight:normal;font-style:normal}         
</style> 
  <div id="container"> 
   <div class="good_topbar" style="background: rgba(237, 237, 237, 0);"> 
    <div class="left"> 
     <div class="btn back" onclick="history.back();" style="background: rgba(237, 237, 237, 0.498039);">
      <i class="fa fa-chevron-left"></i>
     </div> 
    </div> 
    <div class="right"> 
     <div class="btn cart" onclick="location.href='#'" style="background: rgba(237, 237, 237, 0.498039);">
      <i class="fa fa-shopping-cart"></i>
     </div> 
     <div class="btn func" onclick="menu(this)" style="background: rgba(237, 237, 237, 0.498039);">
      <i class="fa fa-ellipsis-v"></i>
     </div> 
    </div> 
   </div> 
   <div class="good_choose_layer"></div> 
   <div class="good_choose" style="max-height: 929px;"> 
    <div class="info"> 
     <div class="left"> 
      <img id="chooser_img" src="http://cy.hckmall.com/shop/images/sorry_novip.jpg" /> 
     </div> 
     <div class="right"> 
      <div class="price">
       会员价：￥
       <span id="option_price">299</span>
      </div> 
      <div class="stock">
       普通价：￥
       <span id="option_stock">399</span>
      </div> 
      <div class="option">
       快递费：0元
      </div> 
     </div> 
     <div class="close" onclick="closechoose()">
      <i class="fa fa-remove-o"></i>
     </div> 
    </div> 
    <div class="other" style="max-height: 754px;"> 
     <input type="hidden" id="optionid" value="" /> 
     <div class="number"> 
      <div class="label">
       提醒：您不是VIP会员，将按照普通价购买产品
      </div> 
     </div> 
    </div> 
    <div class="close" onclick="closechoose()">
     <i class="fa fa-times-circle-o"></i>
    </div> 
    <div class="sub" onclick="location.href='http://cy.hckmall.com/index.php?g=App&amp;m=Shop&amp;a=index&amp;id=20'">
     继续订购
    </div> 
   </div> 
   <div class="good_img"> 
    <div class="main_image"> 
     <ul style="list-style: none; transition-duration: 300ms;"> 
      <li> <img src="/card/Public/Uploads/<?php echo ($info['pic']); ?>" /></li> 
     </ul> 
    </div> 
   </div> 
   <div class="good_info1"> 
    <div class="info2">
     <?php echo ($info["name"]); ?>（<?php echo ($info["des"]); ?>）
    </div> 
    <div class="price">
     会员价：￥
     <d id="marketprice">
      <?php echo ($info["price"]); ?>
     </d> 
    </div> 
    <div class="other"> 
     <div class="left"> 
      <i class="fa fa-user"></i> 普通价 ￥
      <span style="color:#ff6600"><?php echo ($info["price"]); ?>+100.00</span>元 
     </div> 
     <div class="right"> 
      <i class="fa fa-plane"></i> 其中运费 ￥
      <span style="color:#ff6600">0</span>元 
     </div> 
    </div> 
   </div> 
   <div class="good_speci"> 
    <span id="optiondiv">恭喜您可以享受VIP价格订购</span> 
    <i class="fa fa-angle-right" style="float:right; line-height:44px; font-size:26px;"></i> 
   </div> 
   <div class="good_info2"> 
    <div class="menu"> 
     <div id="nav_1" class="nav navon" onclick="tab(1)">
      图文详情
     </div> 
    </div> 
    <div class="tab_con"> 
     <div class="con" id="con_1" style="display:block">
      <p></p>
      <p style="white-space: normal; padding: 0px; line-height: 26px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;"><a href="http://" target="_self"><span style="line-height: 30.4762px; background-color: rgb(255, 255, 255);"><strong>→</strong></span><strong><span style="color:#548dd4"><span style="color:#548dd4;line-height: 30.4762px; background-color: rgb(255, 255, 255);">VIP金卡</span><span style="line-height: 30.4762px; background-color: rgb(255, 255, 255);">完美介绍</span></span></strong></a></p>
      <section class="_135editor" data-tools="135编辑器" data-id="88005" style="color: rgb(0, 0, 0); font-family: 微软雅黑; font-size: medium; line-height: 25.6px; white-space: normal; border: 0px none; padding: 0px; position: relative;">
       <section style="padding-bottom: 3em; text-align: center; border: 0px solid rgb(239, 112, 96);">
        <section data-width="12em" style="margin: 1em auto; width: 12em; height: 12em; border: 0.1em solid rgb(239, 112, 96); border-radius: 50%;">
         <section data-width="11em" style="margin: 0.45em; width: 11em; height: 11em; max-height: 11em; border: 0.1em solid rgb(239, 112, 96); border-radius: 50%;"></section>
        </section>
        <section style="margin-top: -10em;">
         <section style="color: rgb(239, 112, 96);">
          <br />
         </section>
         <section border-color="rgb(9,46,105)" style="display: inline-block; padding: 3px 50px; border-bottom-width: 2px; border-bottom-style: solid; border-color: rgb(239, 112, 96); border-top-width: 2px; border-top-style: solid; color: rgb(239, 112, 96);">
          <span style="font-weight: bold; font-size: 20px;"><span style="color: rgb(239, 112, 96); font-family: 微软雅黑; font-size: 20px; font-weight: bold; line-height: 25.6px; text-align: center; white-space: normal;">I—PAY境外机隆重登场</span></span>
         </section>
         <section data-width="8em" style="margin-right: auto; margin-left: auto; color: rgb(239, 112, 96); width: 8em;">
          <br />
         </section>
        </section>
       </section>
      </section>
      <p></p>
      <section style="color: rgb(0, 0, 0); font-family: 微软雅黑; font-size: medium; line-height: 25.6px; white-space: normal; margin-right: auto; margin-bottom: 10px; margin-left: auto; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(221, 221, 221);">
       <section class="_135editor" data-tools="135编辑器" data-id="86486" style="border: 0px none; padding: 0px;">
        <section style="margin: 30px; color: rgb(39, 80, 44); background-color: rgb(164, 210, 169);">
         <section data-style="text-align: center;color:rgb(255,255,255);" style="color: rgb(62, 62, 62);">
          <section style="display: inline-block; text-align: center; margin-top: 2px; margin-right: -2px; width: 16px; height: 50px; border-right-width: 1px; border-right-style: solid; border-right-color: rgb(164, 210, 169); float: right; transform: rotate(45deg); background-color: rgb(254, 254, 254);"></section>
         </section>
        </section>
       </section>
      </section>
      <section class="_135editor" data-tools="135编辑器" data-id="89173" style="color: rgb(0, 0, 0); font-family: 微软雅黑; font-size: medium; line-height: 25.6px; white-space: normal; border: 0px none; padding: 0px; position: relative;">
       <section class="layout" style="margin: 10px auto; padding: 5px; border: 2px solid rgb(211, 42, 99);">
        <section class="135brush" style="padding: 15px; border: 1px solid rgb(211, 42, 99);">
         <p style="text-align: center; line-height: 25.6px;"><br /></p>
         <p style="font-family: 微软雅黑; font-size: medium; line-height: 25.6px; white-space: normal; text-align: center;"><span style="color: rgb(255, 0, 0);"><span style="font-weight: 700;">GLOBAL—PAY已更名<span style="line-height: 25.6px;">I—PAY境外机</span></span></span></p>
         <p style="font-family: 微软雅黑; font-size: medium; line-height: 25.6px; white-space: normal; color: rgb(0, 0, 0); text-align: center;"><span style="line-height: 25.6px;">I—PAY境外机</span>：刷卡返款比例高，累积100提现，<span style="line-height: 25.6px;">需审核， 方便安全</span></p>
         <p style="font-family: 微软雅黑; font-size: medium; line-height: 25.6px; white-space: normal; color: rgb(0, 0, 0); text-align: center;"><span style="line-height: 25.6px;">I—PAY境外机（车辆违章处理<span style="color: rgb(0, 0, 0); font-family: 微软雅黑; font-size: medium; line-height: 25.6px; text-align: center; white-space: normal;">苹果、</span>安卓已上线）</span></p>
        </section>
       </section>
      </section>
      <p style="white-space: normal; font-family: 微软雅黑; text-align: center; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal;"><img src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14967992877545.png" _src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14967992877545.png" /></p>
      <p style="white-space: normal; font-family: 微软雅黑; text-align: center; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal;"><img src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14967992992674.png" _src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14967992992674.png" /></p>
      <p style="white-space: normal; font-family: 微软雅黑; text-align: center; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal;"><img src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14967993709028.png" _src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14967993709028.png" /></p>
      <p style="white-space: normal; font-family: 微软雅黑; text-align: center; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal;"><img src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14967993822099.png" _src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14967993822099.png" /></p>
      <p style="font-family: 微软雅黑; white-space: normal; text-align: center; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal;"><span style="font-size: 14px; line-height: inherit;"></span><br /></p>
      <section class="" data-id="4" style="font-size: medium; font-family: 微软雅黑; line-height: 25.6px; white-space: normal; color: rgb(62, 62, 62); border: 0px none;">
       <p data-bcless="lighten" style="margin-top: 10px; margin-bottom: 10px; text-align: center; padding: 10px; line-height: 25px; color: rgb(255, 255, 255); box-shadow: rgb(153, 153, 153) 1px 1px 2px; border-left-style: solid; border-color: rgb(241, 148, 180); border-left-width: 20px; background-color: rgb(235, 103, 148);">境外刷功能如下：</p>
      </section>
      <p style="line-height: 22.8571px;"></p>
      <p style="font-size: medium; color: rgb(0, 0, 0); font-family: 微软雅黑; line-height: 25.6px; white-space: normal; text-align: center;"><br /></p>
      <p style="font-family: 微软雅黑; white-space: normal; text-align: center; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal;"><span style="font-size: 14px;">1-不用出国门就可以实现境外消费</span></p>
      <p style="font-family: 微软雅黑; white-space: normal; text-align: center; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal;"><span style="font-size: 14px;">2-刷境外机器可以提高综合评分</span></p>
      <p style="font-family: 微软雅黑; white-space: normal; text-align: center; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal;"><span style="font-size: 14px;">3-刷境外机器可以改善修复银行的刷卡不良记录！</span></p>
      <p style="font-family: 微软雅黑; white-space: normal; text-align: center; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal;"><span style="font-size: 14px; line-height: inherit;">4-部分银行可以现场提额！</span></p>
      <p style="font-family: 微软雅黑; white-space: normal; text-align: center; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal;"><span style="font-size: 14px;">5-刷境外机器等同你的卡片精养三个月</span></p>
      <p style="font-family: 微软雅黑; white-space: normal; text-align: center; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal;"><span style="font-size: 14px;">6-每一笔消费都可以通过中国银联95516和MCC宝典查询！</span></p>
      <p style="font-family: 微软雅黑; white-space: normal; text-align: center; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal;"><span style="font-size: 14px; line-height: inherit;">7-不分单币或者双币卡都可以刷！</span></p>
      <p style="font-family: 微软雅黑; white-space: normal; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal; text-align: center;"><span style="font-weight: 700; color: rgb(0, 176, 240); font-size: 14px;">刷①刀招商境外包激活！</span></p>
      <p style="font-family: 微软雅黑; white-space: normal; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal; text-align: center;"><span style="font-weight: 700; color: rgb(0, 176, 240); font-size: 14px;">刷①民生秒提额度高！</span></p>
      <p style="font-family: 微软雅黑; white-space: normal; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal; text-align: center;"><span style="font-weight: 700; color: rgb(0, 176, 240); font-size: 14px;">刷①刀交通临额翻倍给！</span></p>
      <p style="font-family: 微软雅黑; white-space: normal; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal; text-align: center;"><span style="font-weight: 700; color: rgb(0, 176, 240); font-size: 14px;">刷①刀中国银行出临额！</span></p>
      <p style="font-family: 微软雅黑; white-space: normal; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal; text-align: center;"><span style="font-weight: 700; color: rgb(0, 176, 240); font-size: 14px;">刷①刀中信必出境外额！</span></p>
      <p style="font-family: 微软雅黑; white-space: normal; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal; text-align: center;"><span style="font-weight: 700; color: rgb(0, 176, 240); font-size: 14px;">刷①刀浦发翻倍给临额！</span></p>
      <p style="font-family: 微软雅黑; white-space: normal; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal; text-align: center;"><span style="font-weight: 700; color: rgb(0, 176, 240); font-size: 14px;">刷③刀交行会出好享贷！</span></p>
      <p style="font-family: 微软雅黑; white-space: normal; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal; text-align: center;"><span style="font-weight: 700; color: rgb(0, 176, 240); font-size: 14px;">刷③刀兴行临额也会出！</span></p>
      <p style="font-family: 微软雅黑; white-space: normal; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal; text-align: center;"><span style="color: rgb(0, 176, 240); font-weight: 700; font-size: 14px;">刷⑥刀平安会出备用金！</span></p>
      <p class="" style="font-family: 微软雅黑; white-space: normal; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal; text-align: center;"><span style="color: rgb(0, 176, 240); font-weight: 700; font-size: 14px;">刷⑥刀广发激活财智金！</span></p>
      <p class="" style="font-family: 微软雅黑; white-space: normal; text-align: center; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal;"><span style="color: rgb(0, 176, 240); font-weight: 700; font-size: 14px;"><span style="color: rgb(0, 0, 0); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 18px; line-height: 19.8px;"></span></span></p>
      <p class="" style="white-space: normal; font-family: 微软雅黑; text-align: center; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal;"><span style="color: rgb(0, 176, 240); font-weight: 700; font-size: 14px;"><span style="color: rgb(0, 0, 0); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 18px; line-height: 19.8px;">境外机＋违章机的图片</span></span></p>
      <p class="" style="white-space: normal; font-family: 微软雅黑; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal; text-align: center;"><img src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14967995446692.jpg" _src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14967995446692.jpg" /></p>
      <p class="" style="line-height: 22.8571px; white-space: normal; padding: 10px; text-align: center;"><span style="font-weight: 700; orphans: 2; widows: 2; line-height: normal; color: rgb(0, 176, 240); font-family: 微软雅黑; font-size: 48px;">i-PAY</span><span style="color: rgb(255, 0, 0); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 24px; line-height: 23.2727px; font-weight: 700; orphans: 2; widows: 2;">个人安装使用流程</span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; text-align: center; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; word-wrap: break-word !important;"><span style="margin: 0px; padding: 0px; max-width: 100%; line-height: 1.6; font-weight: 700; font-size: 18px; word-wrap: break-word !important;">1、下载使用软件APP，扫下方二维码安装，输入密码9812，苹果版本和安卓版本都支持，完美兼容</span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; line-height: 25.6px; text-align: center; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; word-wrap: break-word !important;"><span style="margin: 0px; padding: 0px; max-width: 100%; font-size: 18px; line-height: 38.4px; color: rgb(255, 0, 0); word-wrap: break-word !important;"><span style="font-weight: 700; margin: 0px; padding: 0px; max-width: 100%; word-wrap: break-word !important;">文章最后有客服微信及电话</span></span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; line-height: 25.6px; text-align: center; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; word-wrap: break-word !important;"><img src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14967996245412.png" _src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14967996245412.png" /></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; text-align: center; word-wrap: break-word !important;"><br style="margin: 0px; padding: 0px; max-width: 100%; word-wrap: break-word !important;" /></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; text-align: center; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; word-wrap: break-word !important;"><span style="font-size: 20px; font-weight: 700; line-height: 23.2727px;">2、扫码蓝牙手刷上的二维码，进入注册界面，完成注册</span><br /></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; text-align: center; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; word-wrap: break-word !important;"><span style="font-weight: 700; margin: 0px; padding: 0px; max-width: 100%; word-wrap: break-word !important;"><span style="margin: 0px; padding: 0px; max-width: 100%; font-size: 20px; word-wrap: break-word !important;">&nbsp; &nbsp; &nbsp;可添加客服微信咨询操作：YPLF02</span></span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; text-align: center; line-height: 23.2727px; word-wrap: break-word !important;"><img src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14968003104727.jpg" _src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14968003104727.jpg" /></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; text-align: center; line-height: 23.2727px; word-wrap: break-word !important;"><span style="font-size: 20px; font-weight: bold; line-height: 23.2727px; margin: 0px; padding: 0px; max-width: 100%; word-wrap: break-word !important;">3、安装软件后注册&nbsp;</span><span style="font-size: 20px; font-weight: bold; line-height: 23.2727px; margin: 0px; padding: 0px; max-width: 100%; word-wrap: break-word !important;">&nbsp;&nbsp;</span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; text-align: center; line-height: 23.2727px; word-wrap: break-word !important;"><span style="font-size: 20px; font-weight: bold; line-height: 23.2727px; margin: 0px; padding: 0px; max-width: 100%; word-wrap: break-word !important;"><img src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14968003999489.jpg" _src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14968003999489.jpg" /></span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; text-align: center; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; word-wrap: break-word !important;"><br /></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; word-wrap: break-word !important;"><span style="font-weight: 700; margin: 0px; padding: 0px; max-width: 100%; word-wrap: break-word !important;"><span style="margin: 0px; padding: 0px; max-width: 100%; font-size: 20px; word-wrap: break-word !important;"><span style="margin: 0px; padding: 0px; max-width: 100%; color: rgb(0, 82, 255); font-size: medium; line-height: 23.2727px; text-align: center; word-wrap: break-word !important;">&nbsp;&nbsp;</span></span></span><span style="font-weight: 700; margin: 0px; padding: 0px; max-width: 100%; word-wrap: break-word !important;"><span style="margin: 0px; padding: 0px; max-width: 100%; font-size: 20px; word-wrap: break-word !important;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;激活后<span style="margin: 0px; padding: 0px; max-width: 100%; color: rgb(255, 0, 0); word-wrap: break-word !important;">每个会员赠送100元激活返现</span>， 可以购买激活各国家商户。</span></span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; text-align: center; line-height: 23.2727px; word-wrap: break-word !important;"><span style="line-height: 23.2727px;">4</span><span style="font-size: 20px; font-weight: 700; line-height: 23.2727px;">、激活完国家就可以消费了</span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; text-align: center; line-height: 23.2727px; word-wrap: break-word !important;"><span style="font-size: 20px; font-weight: 700; line-height: 23.2727px;"><img src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14968004958664.png" _src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14968004958664.png" /></span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; text-align: center; line-height: 23.2727px; word-wrap: break-word !important;"><span style="font-size: 20px;"><span style="font-weight: 700;">预约消费通道和直联秒扣通到都可以点击激活开通国家</span></span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; text-align: center; word-wrap: break-word !important;"><img src="http://shop.langjiacn.com/Public/Plugin/umeditor/php/upload/20170517/1494993736807.png" _src="http://shop.langjiacn.com/Public/Plugin/umeditor/php/upload/20170517/1494993736807.png" /></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; text-align: center; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; word-wrap: break-word !important;"><span style="font-weight: 700; margin: 0px; padding: 0px; max-width: 100%; word-wrap: break-word !important;"><span style="margin: 0px; padding: 0px; max-width: 100%; font-size: 20px; word-wrap: break-word !important;">6.开启蓝牙，打开蓝牙手刷呦，才可以使用哦！</span></span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; text-align: center; word-wrap: break-word !important;"><img src="http://shop.langjiacn.com/Public/Plugin/umeditor/php/upload/20170517/14949937459167.png" _src="http://shop.langjiacn.com/Public/Plugin/umeditor/php/upload/20170517/14949937459167.png" /></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; text-align: center; word-wrap: break-word !important;"><br style="margin: 0px; padding: 0px; max-width: 100%; word-wrap: break-word !important;" /></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; text-align: center; word-wrap: break-word !important;"><span style="font-weight: 700; margin: 0px; padding: 0px; max-width: 100%; line-height: 23.2727px; word-wrap: break-word !important;"><span style="margin: 0px; padding: 0px; max-width: 100%; font-size: 20px; word-wrap: break-word !important;">7.消费刷卡请选择第一个A80-POS(跟我们境外机是一致的)</span></span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; text-align: center; word-wrap: break-word !important;"><img src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14968004823062.png" _src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14968004823062.png" /></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; text-align: center; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; word-wrap: break-word !important;"><span style="font-weight: 700; margin: 0px; padding: 0px; max-width: 100%; word-wrap: break-word !important;"><span style="margin: 0px; padding: 0px; max-width: 100%; font-size: 20px; word-wrap: break-word !important;">&nbsp; 7 &nbsp; &nbsp;.蓝牙链接成功后，就可以在蓝牙手刷刷卡啦（芯片与磁条都是刷卡，无需插卡）</span></span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; text-align: center; word-wrap: break-word !important;"></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; text-align: center; word-wrap: break-word !important;"></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; text-align: center; word-wrap: break-word !important;"><img src="http://shop.langjiacn.com/Public/Plugin/umeditor/php/upload/20170517/14949937816903.png" _src="http://shop.langjiacn.com/Public/Plugin/umeditor/php/upload/20170517/14949937816903.png" /></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; text-align: center; word-wrap: break-word !important;"><img src="http://shop.langjiacn.com/Public/Plugin/umeditor/php/upload/20170517/14949937914032.png" _src="http://shop.langjiacn.com/Public/Plugin/umeditor/php/upload/20170517/14949937914032.png" /></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; text-align: center; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; word-wrap: break-word !important;"><span style="font-weight: 700; margin: 0px; padding: 0px; max-width: 100%; word-wrap: break-word !important;"><span style="margin: 0px; padding: 0px; max-width: 100%; font-size: 20px; word-wrap: break-word !important;">9.输入密码，您就可以收到消费信息啦，整个刷卡步骤和消费就完成啦</span></span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; text-align: center; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; word-wrap: break-word !important;"><span style="font-weight: 700; margin: 0px; padding: 0px; max-width: 100%; word-wrap: break-word !important;"><span style="margin: 0px; padding: 0px; max-width: 100%; font-size: 20px; word-wrap: break-word !important;"><br /></span></span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; text-align: center; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; word-wrap: break-word !important;"><span style="font-weight: 700; margin: 0px; padding: 0px; max-width: 100%; word-wrap: break-word !important;"><span style="margin: 0px; padding: 0px; max-width: 100%; font-size: 20px; word-wrap: break-word !important;"><br /></span></span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; white-space: normal; text-align: center; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; word-wrap: break-word !important;"><span style="font-weight: 700; margin: 0px; padding: 0px; max-width: 100%; word-wrap: break-word !important;"><span style="margin: 0px; padding: 0px; max-width: 100%; font-size: 48px; color: rgb(255, 0, 0); word-wrap: break-word !important;">二.处理违章机</span></span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; white-space: normal; text-align: center; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; word-wrap: break-word !important;"><span style="color: rgb(0, 0, 0); font-size: 24px;">1、点击车辆违章，违章查询，输入车辆的信息就可以查询哦!</span><br /></p>
      <p style="margin-top: 0px; margin-bottom: 0px; white-space: normal; text-align: center; padding: 0px; max-width: 100%; clear: both; min-height: 1em; font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; word-wrap: break-word !important;"><span style="font-weight: 700; margin: 0px; padding: 0px; max-width: 100%; word-wrap: break-word !important;"><span style="margin: 0px; padding: 0px; max-width: 100%; font-size: 48px; color: rgb(255, 0, 0); word-wrap: break-word !important;"><img src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14968006973258.png" _src="http://cyzs.aici123.com/Public/Plugin/umeditor/php/upload/20170607/14968006973258.png" /></span></span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; text-align: center; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; word-wrap: break-word !important;"><span style="font-weight: 700; margin: 0px; padding: 0px; max-width: 100%; font-size: 20px; line-height: 23.2727px; word-wrap: break-word !important;"><a href="http://cyzs.aici123.com/index.php?g=Admin&amp;m=Shop&amp;a=index" target="_self"><span style="line-height: 30.4762px;">→</span><span style="line-height: 26px;"><span style="color: rgb(84, 141, 212);"><span style="line-height: 30.4762px;">境外机</span><span style="line-height: 30.4762px;">完美介绍</span></span></span></a></span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; text-align: center; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; word-wrap: break-word !important;"><span style="font-weight: 700; margin: 0px; padding: 0px; max-width: 100%; font-size: 20px; line-height: 23.2727px; word-wrap: break-word !important;">长按下图添加客服微信咨询：</span><br style="margin: 0px; padding: 0px; max-width: 100%; word-wrap: break-word !important;" /></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; text-align: center; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; word-wrap: break-word !important;"><span style="margin: 0px; padding: 0px; max-width: 100%; font-size: 20px; word-wrap: break-word !important;"><span style="font-weight: 700; margin: 0px; padding: 0px; max-width: 100%; word-wrap: break-word !important;">或拨打客服电话：0792-8639927</span></span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; text-align: center; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-variant-ligatures: normal; orphans: 2; widows: 2; line-height: 23.2727px; word-wrap: break-word !important;"><span style="margin: 0px; padding: 0px; max-width: 100%; font-size: 20px; word-wrap: break-word !important;"></span></p>
      <p style="margin-top: 0px; margin-bottom: 0px; font-size: medium; white-space: normal; line-height: 25.6px; text-align: center; padding: 0px; max-width: 100%; clear: both; min-height: 1em; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; word-wrap: break-word !important;"><img src="http://shop.langjiacn.com/Public/Plugin/umeditor/php/upload/20170517/14949938089340.png" _src="http://shop.langjiacn.com/Public/Plugin/umeditor/php/upload/20170517/14949938089340.png" /></p>
      <p class="" style="font-family: 微软雅黑; white-space: normal; text-align: center; padding: 10px; color: rgb(62, 62, 62); font-size: 12px; line-height: normal;"><br /></p>
     </div> 
    </div> 
   </div> 
   <div class="good_copyright">
    &copy; 版权所有 爱谁谁--white_ink
   </div> 
   <div class="good_bottom"> 
    <div class="like"> 
     <i class="fa fa-shopping-cart"></i> 
     <br />
     <span>￥<?php echo ($info["price"]); ?>元</span> 
    </div> 
    <form method="post" action="<?php echo U('Card/qrdd');?>">
        <input type="hidden" name="goodsid" value="<?php echo ($info["id"]); ?>">
        <div class="buy" id="buy1111" style="background-color:#ff6801">
         <input type="submit" value="立即购买" style="background-color: #ff6801;border: none;width: 100%;height: 100%;color:white;font-size: 16px;float:right;margin-left: 20px;    position: relative; left: 50%;">
        </div> 
    </form>
   </div> 
  </div> 
  <div id="cover">
   <img src="http://cy.hckmall.com/addons/ewei_shop/static/images/guide.png" style="width:100%;" />
  </div>

<!--   <script type="text/javascript">
    $("#buy1111").click(function(){
        var id=$("#goodsid").val();

        var xmlhttp;
        xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function(){
            if (xmlhttp.readyState==4 && xmlhttp.status==200){
                alert(xmlhttp.responseText)
            }
        }
        xmlhttp.open("post","http://hongchen.chuan.bxso2o.com/card/imooc.php/Home/Card/qrdd",true);
        xmlhttp.send();
    })
</script>  -->
  <script type="text/javascript">
  function tab(n){
    $('#con_'+n).fadeIn();
    $('#con_'+n).siblings().hide();
    $('#nav_'+n).addClass('navon');
    $('#nav_'+n).siblings().removeClass('navon');
                      
  }
        function closechoose(){
                 $('.good_choose_layer').fadeOut(100);
    $('.good_choose').fadeOut(100); 
        }
  function choose(act){
            
                          if($('#followed').val()=='0'  && $('#needfollow').val()=='1' ){
                                require(['core'],function(core){
                                    core.tip.confirm($('#followtip').val(),function(){
                                        location.href = $('#followurl').val();
                                        return;
                                    }) 
                                });
                             return;
                          }
          action = act;
                         if(!action){
                                     
                                $('.good_choose_layer').fadeIn(200);
                                          $('.good_choose_layer').unbind('click').click(function(){
                                                    $('.good_choose_layer').fadeOut(100);
                                 $('.good_choose').fadeOut(100); 
                                          })
                                $('.good_choose').fadeIn(200);
                                return;
                         }
                         var specselected  = '';
                
        $('.spec_items').each(function(){
                                      var self = $(this);
     if( $(this).find('.on').length<=0){
                                          specselected = self.attr('title');
                                          return false;
                                        }
                         });  
                         if(specselected!='') {
                                
         $('.good_choose_layer').fadeIn(200);
                         $('.good_choose_layer').unbind('click').click(function(){
                               closechoose();
                         })
         $('.good_choose').fadeIn(200);
                      } else{
                          if(action=='cart'){
                                                require(['core'],function(core){

                                                                           core.json('shop/cart',{op:'add', id:'79',optionid:$('#optionid').val(),total:$('#total').val()},function(ret){
                                                                                                        if(ret.status==1){
                                                                                                           core.tip.show(ret.result.message);
                                                                                                           var cartdiv = $('.cart');
                                                                                                                               if( cartdiv.find('b').length<=0){
                                                                                                                                  cartdiv.append('<b>'+ ret.result.cartcount +"</b>");
                                                                                                                               }
                                                                                                                               else {
                                                                                                                                  cartdiv.find('b').html(ret.result.cartcount);
                                                                                                                               }

                                                                                                       } else{
                                                                                                           core.message(ret.result,'','error');
                                                                                                       }
                                                                               },true,true);
                                                 });
                                    }

                      }
  }
</script> 
 </body>
</html>