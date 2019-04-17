<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <meta name="format-detection" content="telephone=no" />
        <title>确认订单</title>
        <link rel="stylesheet" type="text/css" href="http://wei.hnhb.name/addons/ewei_shopv2/static/js/dist/foxui/css/foxui.min.css?v=0.2">
        <link rel="stylesheet" type="text/css" href="http://wei.hnhb.name/addons/ewei_shopv2/template/mobile/default/static/css/style.css?v=2.0.3">
        
        <link rel="stylesheet" type="text/css" href="http://wei.hnhb.name/addons/ewei_shopv2/static/fonts/iconfont.css?v=2016070717">
<script src="http://wei.hnhb.name/app/resource/js/lib/jquery-1.11.1.min.js"></script>
       <script src='http://res.wx.qq.com/open/js/jweixin-1.1.0.js'></script>
        <script src="http://wei.hnhb.name/addons/ewei_shopv2/static/js/require.js"></script>
        <script src="http://wei.hnhb.name/addons/ewei_shopv2/static/js/myconfig-app.js"></script>
<!--         <script type="text/javascript" src="core.js"></script>
        <script type="text/javascript" src="create.js"></script>
        <script type="text/javascript" src="init.js"></script> -->
        <script language="javascript">require(['core'],function(modal){modal.init({siteUrl: "http://wei.hnhb.name/",baseUrl: "./index.php?i=3&c=entry&m=ewei_shopv2&do=mobile&r=ROUTES"})});</script>


        
        
        
        <style>.danmu {display: none;opacity: 0;}</style>
    </head>

    <body ontouchstart style="overflow:scroll;overflow-x:hidden">

        <div class='fui-page-group '>
            <link rel="stylesheet" type="text/css" href="http://wei.hnhb.name/addons/ewei_shopv2/template/mobile/default/static/css/coupon.css?v=2.0.0">
<link rel="stylesheet" type="text/css" href="http://wei.hnhb.name/addons/ewei_shopv2/template/mobile/default/static/css/coupon-new.css?v=2017030302">
<style>
    .yen{border:none;height:0.75rem;width:0.75rem;display: inline-block;background: #ff4753;color:#fff;font-size:0.4rem;line-height: 0.8rem;text-align: center;
        font-style: normal;border-radius: 0.75rem;-webkit-border-radius: 0.75rem;}
    .fui-page, .fui-page-group{
        display: block;
    }
</style>
<div class='fui-page order-create-page'>
    <div class="fui-header">
        <div class="fui-header-left">
            <a class="back"></a>
        </div>
        <div class="title">确认订单</div>
        <div class="fui-header-right" data-nomenu="true">&nbsp;</div>
    </div>
    <div class='fui-content  navbar'>

        
        
        <!--联系填写-->
<div class="fui-cell-group sm" id="memberInfo" >
<div class="fui-cell">
    <div class="fui-cell-label sm">联系人</div>
    <div class="fui-cell-info"><input type="text" placeholder="请输入联系人" data-set="" name='carrier_realname' class="fui-input" value=""/></div>
</div>
<div class="fui-cell">
    <div class="fui-cell-label sm">联系电话</div>
    <div class="fui-cell-info"><input type="tel" placeholder="请输入联系电话" data-set="" name='carrier_mobile' class="fui-input" value=""/></div>
</div>
</div>


<div class="fui-list-group" >

        <div class="fui-list-group-title"><i class="icon icon-shop"></i > 武林科技</div>
        <input type='hidden' name='goodsid[]' value="" />
    <input type='hidden' name='optionid[]' value="0" />
    <div class="fui-list goods-item">
        <div class="fui-list-media">
            <a href="./index.php?i=3&c=entry&m=ewei_shopv2&do=mobile&r=goods.detail&id=6">
                <img src="http://wei.hnhb.name/attachment/images/3/2017/07/wT4Y5lF2DHYY26FF5hL4haqD26lan4.png" class="round package-goods-img">
            </a>
        </div>
        <div class="fui-list-inner">
            <a href="./index.php?i=3&c=entry&m=ewei_shopv2&do=mobile&r=goods.detail&id=6">
                <div class="text">
                                                                                一年vip会员                </div>
                            </a>
        </div>
        <div class='fui-list-angle'>
            <span class="price ">&yen; <span class='marketprice'></span></span>
            <span class="total">
                                        <div class="fui-number small" data-value="1" data-unit="" data-maxbuy="1" data-minbuy="1" data-goodsid="6">
                        <div class="minus">-</div>
                        <input class="num shownum" type="tel" name="" value="1"/>
                        <div class="plus">+</div>
                    </div>
                                    </span>
        </div>

    </div>
        




    <script type="text/javascript">
        $(function(){
            $(".package-goods-img").height($(".package-goods-img").width());
        })
    </script>
    <div class='fui-cell-group'>
        
                <div class="fui-cell">
        <div class="fui-cell-info" style="text-align: right;">共 <span id='goodscount' class='text-danger'>1</span> 件商品 合计：<span class="text-danger">&yen; <span class='goodsprice'><?php echo ($info["price"]); ?></soan></span></div>
    </div>

</div>
</div>


<div class="fui-cell-group sm ">
    <div class="fui-cell">
        <div class="fui-cell-info"><input type="text" class="fui-input" id='remark' placeholder="选填: 买家留言(50字以内)" maxlength="50"></div>
    </div>
</div>
<div class="fui-cell-group  sm">

    <div id='coupondiv' class="fui-cell fui-cell-click" style='display:none'>
    <div class='fui-cell-label' style='width:auto;'>优惠券</div>
    <div class='fui-cell-info'></div>
    <div class='fui-cell-remark'>
        <img id="couponloading" src="http://wei.hnhb.name/addons/ewei_shopv2/static/images/loading.gif" style="vertical-align: middle;display: none;" width="20" alt=""/>
        <div class='badge badge-danger' style='display:none'>0</div>
    <span class='text' >无可用</span>
</div>
</div>




</div>



<div class="fui-cell-group sm">
    <input type="hidden" id="weight" name='weight' value="0" />
        <div class="fui-cell">
        <div class="fui-cell-label" >商品小计</div>
        <div class="fui-cell-info"></div>
        <div class="fui-cell-remark noremark">&yen; <span class='goodsprice'>
            <?php echo ($info["price"]); ?>       </span></div>
    </div>
                <div class="fui-cell istaskdiscount"  style="display: none">
        <div class="fui-cell-label" style='width:auto' >任务活动优惠</div>
        <div class="fui-cell-info"></div>
        <div class="fui-cell-remark noremark">-&yen; <span id='showtaskdiscountprice' class='showtaskdiscountprice'></span></div>
        <input type="hidden" id='taskdiscountprice' class='taskdiscountprice'  value="0.00" />
    </div>

    <div class="fui-cell islotterydiscount"  style="display: none">
        <div class="fui-cell-label" style='width:auto' >游戏活动优惠</div>
        <div class="fui-cell-info"></div>
        <div class="fui-cell-remark noremark">-&yen; <span id='showlotterydiscountprice' class='showlotterydiscountprice'></span></div>
        <input type="hidden" id='lotterydiscountprice' class='lotterydiscountprice'  value="0.00" />
    </div>

    <div class="fui-cell discount"  style="display: none">
        <div class="fui-cell-label" style='width:auto' >会员优惠</div>
        <div class="fui-cell-info"></div>
        <div class="fui-cell-remark noremark">-&yen; <span id='showdiscountprice' class='showdiscountprice'></span></div>
        <input type="hidden" id='discountprice' class='discountprice'  value="0.00" />
    </div>

    <div class="fui-cell isdiscount"  style="display: none">
        <div class="fui-cell-label" style='width:auto' >促销优惠</div>
        <div class="fui-cell-info"></div>
        <div class="fui-cell-remark noremark">-&yen; <span id='showisdiscountprice' class='showisdiscountprice'></span></div>
        <input type="hidden" id='isdiscountprice' class='isdiscountprice'  value="0.00" />
    </div>

    <div class="fui-cell" id="deductenough" style='display:none'>
    <div class="fui-cell-label" style='width:auto' >商城单笔满 <span id="deductenough_enough" class='text-danger'>0.00</span> 元立减</div>
    <div class="fui-cell-info"></div>
    <div class="fui-cell-remark noremark">-&yen; <span id='deductenough_money'></span></div>
</div>

<div class="fui-cell" id="merch_deductenough" style='display:none'>
<div class="fui-cell-label" style='width:auto' >商户单笔满 <span id="merch_deductenough_enough" class='text-danger'>0.00</span> 元立减</div>
<div class="fui-cell-info"></div>
<div class="fui-cell-remark noremark">-&yen; <span id='merch_deductenough_money'></span></div>
</div>

<div class="fui-cell" id="seckillprice"  style="display: none">
<div class="fui-cell-label" style='width:auto' >秒杀优惠</div>
<div class="fui-cell-info"></div>
<div class="fui-cell-remark noremark">-&yen; <span id="seckillprice_money">0.00</span></div>
</div>


<div class="fui-cell">
    <div class="fui-cell-label" >运费</div>
    <div class="fui-cell-info"></div>
    <div class="fui-cell-remark noremark">&yen; <span class='dispatchprice'>0.00</span></div>
</div>


<div class="fui-cell" id='coupondeduct_div' style='display:none'>
    <div class="fui-cell-label" style='width:auto' id='coupondeduct_text' ></div>
    <div class="fui-cell-info"></div>
    <div class="fui-cell-remark noremark">-&yen; <span id="coupondeduct_money">0</span></div>
</div>
</div>

</div>

<div class="fui-navbar order-create-checkout">
    <a href="javascript:;" class="nav-item total">
        <p> 需付：<span class="text-danger ">&yen; <span class="totalprice">
                <?php echo ($info["price"]); ?></span></span>
        </p>
    </a>
    <a href="<?php echo U('Card/zhifu',array('id'=>$info['id']));?>" class="nav-item btn btn-danger buybtn">立即支付</a>
</div>
<script id="tpl_coupons" type="text/html">
    <div class="coupon-picker option-picker">
        <div class="option-picker-inner coupon-picker">
            <div class="coupon-list mini">
                <%each wxcards as wxcard%>
                    <div class="coupon-item  <%wxcard.color%>   "
                         data-couponname="<%wxcard.title%>"
                         data-contype="1"
                         data-wxid="<%wxcard.id%>"
                         data-wxcardid="<%wxcard.card_id%>"
                         data-wxcode="<%wxcard.code%>"
                         data-merchid="<%wxcard.merchid%>">
                        <div class="coupon-dots">
                            <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
                        </div>
                        <div class="coupon-left">
                            <div class="single"><%if wxcard.backpre%><span class="subtitle">￥</span><%/if%><%wxcard.backmoney%></div>
                        </div>
                        <div class="coupon-right">
                            <div class="title"><%wxcard.title%></div>
                            <div class="usetime">
                                <div class="text">有效期:<%wxcard.timestr%></div>
                            </div>
                        </div>
                        <div class="coupon-after">
                            <div class="coupon-btn">选择</div>
                        </div>
                    </div>
                <%/each%>

                <%each coupons as coupon%>
                <div class="coupon-item  <%coupon.color%> "
                     data-contype="2"
                     data-couponname="<%coupon.couponname%>"
                     data-couponid="<%coupon.id%>"
                     data-merchid="<%coupon.merchid%>">
                    <div class="coupon-dots">
                        <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="coupon-left">
                        <div class="single"><%if coupon.backpre%><span class="subtitle">￥</span><%/if%><%coupon.backmoney%></div>
                    </div>
                    <div class="coupon-right">
                        <div class="title"><%coupon.couponname%></div>
                        <div class="usetime">
                            <div class="text">有效期:<%coupon.timestr%></div>
                        </div>
                    </div>
                    <div class="coupon-after">
                        <div class="coupon-btn">选择</div>
                    </div>
                </div>
                <%/each%>
            </div>
        </div>
        <div class="fui-navbar" style="z-index: 999">
            <a class="nav-item btn btn-default btn-cancel"  style="color: #666">不使用优惠券</a>
            <a class="nav-item btn btn-danger btn-confirm">确定使用</a>
        </div>
    </div>
</script><script language='javascript'>require(['biz/order/create'], function (modal) {modal.init({"id":6,"gdid":0,"fromcart":0,"addressid":0,"storeid":0,"couponcount":0,"coupon_goods":[{"goodsid":"6","total":1,"optionid":0,"marketprice":"398.00","merchid":"0","cates":"","discounttype":0,"isdiscountprice":0,"discountprice":0,"isdiscountunitprice":0,"discountunitprice":0}],"isvirtual":true,"isverify":false,"goods":[{"goodsid":"6","total":1,"optionid":0,"marketprice":"398.00","merchid":"0","cates":"","discounttype":0,"isdiscountprice":0,"discountprice":0,"isdiscountunitprice":0,"discountunitprice":0}],"merchs":[],"orderdiyformid":0,"giftid":0,"mustbind":0}); });</script>
</div>
<script language='javascript'>
    $(function(){
        $.getJSON("./index.php?i=3&c=entry&m=ewei_shopv2&do=mobile&r=util.task");
    })
</script>

<script language="javascript">
    require(['init']);

    setTimeout(function () {
        if($(".danmu").length>0){
            $(".danmu").remove();
        }
    }, 500);
</script>




<script language="javascript">
        clearTimeout(window.interval);
        window.interval = setTimeout(function () {
            window.shareData = {"hideMenus":["menuItem:share:qq","menuItem:share:QZone","menuItem:share:email","menuItem:copyUrl","menuItem:openWithSafari","menuItem:openWithQQBrowser","menuItem:share:timeline","menuItem:share:appMessage"]};
            jssdkconfig = {"appId":"wxe905119158ebe7d3","nonceStr":"XSS0RKrspkPS2NYZ","timestamp":"1499510266","signature":"56829981c5666ef5dc1137a45db2d888ed6f13cc"} || { jsApiList:[] };
            jssdkconfig.debug = false;
            jssdkconfig.jsApiList = ['checkJsApi','onMenuShareTimeline','onMenuShareAppMessage','onMenuShareQQ','onMenuShareWeibo','showOptionMenu', 'hideMenuItems', 'onMenuShareQZone', 'scanQRCode'];
            wx.config(jssdkconfig);
            wx.ready(function () {
                wx.showOptionMenu();

                                    wx.hideMenuItems({
                        menuList: ["menuItem:share:qq","menuItem:share:QZone","menuItem:share:email","menuItem:copyUrl","menuItem:openWithSafari","menuItem:openWithQQBrowser","menuItem:share:timeline","menuItem:share:appMessage"]                    });
                
                wx.onMenuShareAppMessage(window.shareData);
                wx.onMenuShareTimeline(window.shareData);
                wx.onMenuShareQQ(window.shareData);
                wx.onMenuShareWeibo(window.shareData);
                wx.onMenuShareQZone(window.shareData);
            });
        },500);


        </script> 

    
<span style="display:none"></span>
</body>
</html>