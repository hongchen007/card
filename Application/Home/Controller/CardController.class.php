<?php
namespace Home\Controller;
use Think\Controller;
class CardController extends Controller {
    //测试
    public function ceshi(){
        $id = I('get.id','','strip_tags');
        dump($id);
    }
    //地址处理
    public function address($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        $res = curl_exec($ch);
        curl_close($ch);
        if(curl_errno($ch)){
            var_dump(curl_error($ch));
        }
        $arr = json_decode($res,true);
        $openid = $arr['openid'];
        return $openid;
    }
    //非会员
    public function nonum(){
        $this->display();
    }
    //新手帮助
    public function newknow(){
        $this->display();
    }
    //我要推广
    public function pushknow(){
        $this->display();
    }
    //信用卡知识文章
    public function indexa(){
        $weixin_user = M('weixin_user');
        $link = M('link');
        $article_card = M('article_card');
        $code =  $_GET['code'];
        // dump($code);exit;
        $url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".C('const.appid')."&secret=".C('const.secret')."&code=$code&grant_type=authorization_code";
        $where['openid'] = $this->address($url);
        $info = $weixin_user ->where($where)->field('grade')->find();
        if(empty($info['grade'])){
            $this->redirect('Card/nonum');
        }else{
            //查询数据
            $info = $article_card->find();
            $link = $link->select();
            //分配数据，加载模板
            $this->assign('info',$info);
            $this->assign('link',$link);
            $this->display();
        }
    }
    //金融理财知识文章
    public function fin(){
        //实例化
        $article_fin = M('article_fin');
        // $link = M('link');
        //查询数据
        $info = $article_fin->find();
        // $linkinfo = $link->select();
        // dump($linkinfo);exit;
        //分配数据，加载模板
        $this->assign('info',$info);
        $this->assign('linkinfo',$linkinfo);
        $this->display();
    }
    //钱包商城
    public function shangcheng(){
        $weixin_user = M('weixin_user');
        $code =  $_GET['code'];
        // echo $code;
        $url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".C('const.appid')."&secret=".C('const.secret')."&code=$code&grant_type=authorization_code";
        $where['openid'] = $this->address($url);
        $openid = $where['openid'];
        // $info = $weixin_user ->where($where)->field('grade')->find();
        // if(empty($info['grade'])){
        //     $this->redirect('Card/nonum');
        // }else{
            $goods = M('goods');
            $info = $goods->select();
            // dump($info);exit;
            //分配数据，加载模板
            $this->assign('info',$info);
            $this->assign('openid',$openid);
            $this->display();
        // }       
    }
    //钱包商城aa
    public function shangchengaa(){
        $goods = M('goods');
        $info = $goods->select();
        $openid=I('get.openid','','strip_tags');
        // dump($openid);exit;
        //分配数据，加载模板
        $this->assign('info',$info);
        $this->assign('openid',$openid);
        $this->display();     
    }
    //个人中心
    public function huiyuanzhongxin(){
        $weixin_user = M('weixin_user');
        $code =  $_GET['code'];
        // echo $code;
        $url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".C('const.appid')."&secret=".C('const.secret')."&code=$code&grant_type=authorization_code";
       
        $where['openid'] = $this->address($url);
        $openid = $where['openid'];
        $info = $weixin_user ->where($where)->field('grade')->find();
        if(empty($info['grade'])){
            $this->redirect('Card/nonum');
        }else{
            $this->redirect('User/index',array('openid' => $openid));
        }       
    }

    //联系我们
    public function about(){
        $weixin_user = M('weixin_user');
        $code =  $_GET['code'];
        // echo $code;
        $url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".C('const.appid')."&secret=".C('const.secret')."&code=$code&grant_type=authorization_code";
        $where['openid'] = $this->address($url);
        $openid = $where['openid'];
        // dump($openid);exit;
        $info = $weixin_user ->where($where)->field('grade')->find();
        if(empty($info['grade'])){
            $this->redirect('Card/nonum');
        }else{
            $about = M('about');
            //查询数据
            $info = $about->select();
            //分配数据，加载模板
            $this->assign('openid',$openid);
            $this->assign('info',$info);
            $this->display();
        }
    }

    //信用贷款aa
    public function financeaa(){
        $this->display();
    }
    //信用贷款
    public function finance(){
        $weixin_user = M('weixin_user');
        $code =  $_GET['code'];
        // echo $code;
        $url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".C('const.appid')."&secret=".C('const.secret')."&code=$code&grant_type=authorization_code";
        $where['openid'] = $this->address($url);
        $openid = $where['openid'];
        $info = $weixin_user ->where($where)->field('grade')->find(); 
        // $aa = C('const.appid');
        // // dump($aa);
        // // dump($openid);
        // // dump($info);exit;
        if(empty($info['grade'])){
            $this->redirect('Card/nonum');
        }else{
            $about = M('about');
            //查询数据
            $info = $about->select();
            //分配数据，加载模板
            $this->assign('openid',$openid);
            $this->display();
        }
    }
    //白户贷款
    public function whiteuser(){
        $weixin_user = M('weixin_user');
        $code =  $_GET['code'];
        // echo $code;
        $url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".C('const.appid')."&secret=".C('const.secret')."&code=$code&grant_type=authorization_code";
        $where['openid'] = $this->address($url);
        $openid = $where['openid'];
        // dump($code);
        $info = $weixin_user ->where($where)->field('grade')->find();
        if(empty($info['grade'])){
            $this->redirect('Card/nonum');
        }else{
            $about = M('about');
            //查询数据
            $info = $about->select();
            //分配数据，加载模板
            $this->assign('openid',$openid);
            $this->display();
        }
    }

    //白户贷款下一链接
    public function recommend(){
        $this->display();
    }

    //白户贷款下一链接
    public function QR(){
        //实例化
        $weixin_user = M('weixin_user');
        $where['openid'] = $_GET['openid'];
        $info = $weixin_user->where($where)->field('weixin_name,weixin_headimgurl')->find();
        $this->assign('info',$info);
        $this->display();
    }

    //黑户贷款
    public function blackuser(){
        $weixin_user = M('weixin_user');
        $code =  $_GET['code'];
        // echo $code;
        $url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".C('const.appid')."&secret=".C('const.secret')."&code=$code&grant_type=authorization_code";
        $where['openid'] = $this->address($url);
        $openid = $where['openid'];
        // dump($code);
        $info = $weixin_user ->where($where)->field('grade')->find();
        if(empty($info['grade'])){
            $this->redirect('Card/nonum');
        }else{
            $about = M('about');
            //查询数据
            $info = $about->select();
            //分配数据，加载模板
            $this->assign('openid',$openid);
            $this->display();
        }
    }

    //商品详情
    public function detail(){
        $goods = M('goods');
        $data['id'] = I('get.id','','strip_tags');
        $info = $goods->where($data)->find();
        $this->assign('info',$info);
        $this->display();
    }
    //确认订单
    public function qrdd(){
        $goods = M('goods');
        $data['id'] = I('post.goodsid','0','intval');
        $info = $goods->where($data)->find();
        // dump($info);exit;
        $this->assign('info',$info);
        $this->display();
    }
    //支付
    public function zhifu(){
        //实例化
        $goods = D('goods');
        //接收数据
        $id = I('get.id','','strip_tags');
        // dump($id);
        //查询数据
        $goodsinfo = $goods->where("id=$id")->find();
        // dump($goodsinfo);exit;
        $goodsinfo1 = base64_encode(json_encode($goodsinfo));  //这个数据需要先编码
        $a5 = iconv("GBK","UTF-8",$goodsinfo1);                //这个也不知道为啥就需要这样做，百度的，要不然后面的数据接收总数为空
        //下面这个是跳转的地址，记得带上参数，跳转到微信支付demo中的jsapi.php中
        echo "<script> window.location.href='http://hongchen.chuan.bxso2o.com/card/pay/example/jsapi.php?state=$a5'</script>";
    }

    //支付数据处理
    public function dozhifu(){
        //实例化
        $goods = M('goods');
        $user  = M('weixin_user');
        $order  = M('order');
        //接收数据
        // $openid = $_GET['openid'];
        $where1['openid'] = $_GET['openid'];
        $total_fee = $_GET['total_fee'];     //金额
        $ordernum  = $_GET['ordernum'];     //订单号
        $where2['price'] = $total_fee/100;
        //查询商品和购买者数据
        $info = $goods->where($where2)->find();
        $userinfo = $user->where($where1)->field('id')->find();
        $id = $userinfo['id'];
        //更新
        if($info['id'] == 1){
            //修改weixin_user表
            $data['grade'] = 2;
            $userinfo1 = $user->where("id=$id")->save($data);
            //增加order表信息
            $date['goods_id'] = $info['id'];
            $date['user_id']  = $id;
            $date['addtime']  = date("Y-m-d H:i:s");
            $date['money']    = $info['price'];
            $date['ordernum'] = $map['ordernum'] = $ordernum;
            if(empty($order->where($map)->find())){
                $orderinfo = $order->add($date);
            }
        }
        if($info['id'] == 2){
            //修改weixin_user表
            $data['grade'] = 1;
            $userinfo1 = $user->where("id=$id")->save($data);
            //增加order表信息
            $date['goods_id'] = $info['id'];
            $date['user_id']  = $id;
            $date['addtime']  = date("Y-m-d H:i:s");
            $date['money']    = $info['price'];
            $date['ordernum'] = $map['ordernum'] = $ordernum;
            if(empty($order->where($map)->find())){
                $orderinfo = $order->add($date);
            }
        }
        if($info['id'] == 3){
            //修改weixin_user表
            $data['grade'] = 2;
            $userinfo1 = $user->where("id=$id")->save($data);
            //增加order表信息
            $date['goods_id'] = $info['id'];
            $date['user_id']  = $id;
            $date['addtime']  = date("Y-m-d H:i:s");
            $date['money']    = $info['price'];
            $date['ordernum'] = $map['ordernum'] = $ordernum;
            if(empty($order->where($map)->find())){
                $orderinfo = $order->add($date);
            }
        }
    }

}