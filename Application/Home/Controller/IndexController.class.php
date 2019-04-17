<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
        //获得参数 signature nonce token timestamp echostr
        $nonce     = $_GET['nonce'];
        $token     = 'kunkun';
        $timestamp = $_GET['timestamp'];
        $echostr   = $_GET['echostr'];
        $signature = $_GET['signature'];
        $openid    = $_GET['openid'];

        // dump($openid);
        //形成数组，然后按字典序排序
        $array = array();
        $array = array($nonce, $timestamp, $token);
        sort($array);
        //拼接成字符串,sha1加密 ，然后与signature进行校验
        $str = sha1( implode( $array ) );
        if( $str  == $signature && $echostr ){
            //第一次接入weixin api接口的时候
            echo  $echostr;
            exit;
        }else{
            // $access_token = $this->getWxAccessToken();
            // echo 111;
            $this->reponseMsg();
            $this->definedItem();
        }
    }
    //加载消息
    public function reponseMsg(){
        //获取微信穿过来得数据(xml类型)
        $postArr = $GLOBALS['HTTP_RAW_POST_DATA'];
        //处理消息类型，并设置回复消息类型和内容
        $postObj = simplexml_load_string( $postArr );

        if(  strtolower( $postObj->MsgType) == 'event'){ 
            //如果是关注 subscribe
            if( strtolower($postObj->Event == 'subscribe')){
                $access_token = $this->getWxAccessToken();
                //获取用户的基本信息
                $toUser   = $postObj->FromUserName;//就是OpenID
                // session("openid",$toUser);
                $url2 = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$access_token."&openid=".$toUser."&lang=zh_CN" ;
                        // https://api.weixin.qq.com/cgi-bin/user/info?access_token=ACCESS_TOKEN&openid=OPENID
                //2初始化
                $ch1 = curl_init();
                //3.设置参数
                curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, FALSE);
                curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST, FALSE);
                curl_setopt($ch1 , CURLOPT_URL, $url2);
                curl_setopt($ch1 , CURLOPT_RETURNTRANSFER, 1);
                //4.调用接口 
                $res1 = curl_exec($ch1);
                //5.关闭curl
                curl_close( $ch1 );
                if( curl_errno($ch1) ){
                    var_dump( curl_error($ch1) );
                }
                $arrinfo = json_decode($res1, true);
                $weixin_name = $arrinfo["nickname"];

                //添加数据到数据库
                $weixin_user = M('weixin_user');
                $where['openid'] = "$toUser";
                if($weixin_user->where($where)->find()){

                }else{
                    $data['openid'] = "$toUser";
                    $data['weixin_name'] = $arrinfo["nickname"];
                    $data['weixin_sex'] = $arrinfo["sex"];
                    $data['weixin_city'] = $arrinfo["city"];
                    $data['weixin_province'] = $arrinfo["province"];
                    $data['weixin_country'] = $arrinfo["country"];
                    $data['weixin_headimgurl'] = $arrinfo["headimgurl"];
                    $data['weixin_addtime'] = date('Y-m-d H:i:s',time());                
                    // $data['random'] = rand(1111,9999);             
                    $weixin_user->add($data);
                }

                //回复消息
                // $toUser   = $postObj->FromUserName;//就是OpenID
                $fromUser = $postObj->ToUserName;
                $time     = time();
                $msgType  = 'text';
                $content  = "尊敬的".$weixin_name."您已成为钱宝的第".rand(1111,9999)."位关注者\r\n"."钱宝为会员提供\r\n".
                            "一、几十种黑户、白户和信用贷款通道，各种金融机构信用卡办理及提额技术，利息最低4厘5，额度1k-30w，手机在线办理，全国申请，操作便捷。\r\n".
                            "二、个人贷款、信用卡、理财等金融知识。\r\n".
                            "三、管理规范、客源充足的销售平台。\r\n".
                            "四、物美价廉、货真价实的购物平台。\r\n".
                            "开通钱宝会员、让自己的钱包鼓起来\r\n".
                            "<a href='http://hongchen.chuan.bxso2o.com/card/index.php/Home/Login/index'>点击注册钱宝会员</a>";
                // $content  = '尊敬的'..'您已成为钱宝的第'.rand(111111,999999).'位关注者。';
                $template = "<xml>
                                <ToUserName><![CDATA[%s]]></ToUserName>
                                <FromUserName><![CDATA[%s]]></FromUserName>
                                <CreateTime>%s</CreateTime>
                                <MsgType><![CDATA[%s]]></MsgType>
                                <Content><![CDATA[%s]]></Content>
                            </xml>";
                echo sprintf($template,$toUser,$fromUser,$time,$msgType,$content);

            }

            if( strtolower($postObj->Event == 'CLICK')){
                $openid   = $postObj->FromUserName;//就是OpenID
                // if( strtolower($postObj->EventKey == 'huiyuanzhongxin')){
                //     $content = "<a href='http://'.C('url1').'/card/imooc.php/Home/User/index?openid=$openid'>点击进入会员中心页面</a>";
                // }
                // if( strtolower($postObj->EventKey == 'qianbaoshangcheng')){
                //     $content = "<a href='http://'.C('url1').'/card/imooc.php/Home/Card/shangcheng?openid=$openid'>点击进入钱宝商城界面</a>";
                // }
                $toUser   = $postObj->FromUserName;//就是OpenID
                $fromUser = $postObj->ToUserName;
                $time     = time();
                $msgType  = 'text';
                $template = "<xml>
                                <ToUserName><![CDATA[%s]]></ToUserName>
                                <FromUserName><![CDATA[%s]]></FromUserName>
                                <CreateTime>%s</CreateTime>
                                <MsgType><![CDATA[%s]]></MsgType>
                                <Content><![CDATA[%s]]></Content>
                            </xml>";
                echo sprintf($template,$toUser,$fromUser,$time,$msgType,$content);
            }  
        }else if(strtolower( $postObj->MsgType) == 'text'){
            $toUser   = $postObj->FromUserName;
            $fromUser = $postObj->ToUserName;
            $time     = time();
            $msgType  =  'text';
            //$content  = 'imooc is very good'.$postObj->FromUserName.'-'.$postObj->ToUserName;
            $template = "<xml>
                            <ToUserName><![CDATA[%s]]></ToUserName>
                            <FromUserName><![CDATA[%s]]></FromUserName>
                            <CreateTime>%s</CreateTime>
                            <MsgType><![CDATA[%s]]></MsgType>
                            <Content><![CDATA[%s]]></Content>
                            </xml>";
            switch( trim($postObj->Content)){
                case 1:
                    $content = '您输入的数字是1';
                break;
                case 2:
                    $content = '您输入的数字是2';
                break;
                case 3:
                    $content = '<a href="http://www.baidu.com">百度</a>';
                break;
                case tuwen:
                        $arr=array(
                            array('title'=>'imooc',
                                'description'=>'imooc描述',
                                'picUrl'=>'http://www.imooc.com/static/img/common/logo.png',
                                'url'=>'http://www.baidu.com'),
                            array('title'=>'hao123',
                                'description'=>'hao123描述',
                                'picUrl'=>'http://www.imooc.com/static/img/common/logo.png',
                                'url'=>'http://www.hao123.com'),
                            array('title'=>'baidu',
                                'description'=>'baidu描述',
                                'picUrl'=>'http://www.imooc.com/static/img/common/logo.png',
                                'url'=>'http://www.baidu.com'),
                         );
                    $content = '<a href="http://www.baidu.com">百度</a>';
                    $template_tuWen = "<xml>
                                <ToUserName><![CDATA[%s]]></ToUserName>
                                <FromUserName><![CDATA[%s]]></FromUserName>
                                <CreateTime>%s</CreateTime>
                                <MsgType><![CDATA[%s]]></MsgType>
                                <ArticleCount>".count($arr)."</ArticleCount>
                                <Articles>";
                    foreach($arr as $k=>$v){
                        $template_tuWen .= "<item>
                                <Title><![CDATA[".$v['title']."]]></Title>
                                <Description><![CDATA[".$v['description']."]]></Description>
                                <PicUrl><![CDATA[".$v['picUrl']."]]></PicUrl>
                                <Url><![CDATA[".$v['url']."]]></Url>
                                </item>";
                    }

                    $template_tuWen .="</Articles>
                                </xml>";
                    $info     = sprintf($template_tuWen, $toUser,$fromUser,$time,'news');
                    echo $info;
                    break;
            }

            $info     = sprintf($template, $toUser, $fromUser, $time, $msgType, $content);
            echo $info;
        }
    }
    //地址的处理
    public function http_curl($url,$type='get',$res='json',$arr=''){

        //1.初始化curl
        $ch  =curl_init();
        //2.设置curl的参数
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

        if($type == 'post'){
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
        }
        //3.采集
        $output =curl_exec($ch);

        //4.关闭
        curl_close($ch);
        if($res=='json'){
            if(curl_error($ch)){
                //请求失败，返回错误信息
                return curl_error($ch);
            }else{
                //请求成功，返回错误信息

                return json_decode($output,true);
            }
        }
        echo var_dump( $output );
    }

    //创建自定义菜单
    public function  definedItem(){
        //创建微信菜单
        //目前微信接口的调用方式都是通过 curl post/get
        header('content-type:text/html;charset=utf-8');
        echo $access_token=$this ->getWxAccessToken();
        echo "======================这是access_token=======================";
        echo $url ='https://api.weixin.qq.com/cgi-bin/menu/create?access_token='.$access_token;
        echo "========================这是url=============================";
        $postArr=array(
            'button'=>array(
                array(
                    'name'=>urlencode('借款通道'),
                    'sub_button'=>array(
                        array(
                            'name'=>urlencode('信用贷款'),
                            'type'=>'view',
                            // 'url'=>'http://'.C('url1').'/card/Public/123/finance.html'
                            'url'=>'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.C('const.appid').'&redirect_uri=http%3a%2f%2f'.C('url1').'%2fcard%2findex.php%2fHome%2fCard%2ffinance&response_type=code&scope=snsapi_base&state=123#wechat_redirect'
                        ),//第一个二级菜单
                        array(
                            'name'=>urlencode('白户贷款'),
                            'type'=>'view',
                            // 'url'=>'http://'.C('url1').'/card/Public/123/whiteuser.html'
                            'url'=>'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.C('const.appid').'&redirect_uri=http%3a%2f%2f'.C('url1').'%2fcard%2findex.php%2fHome%2fCard%2fwhiteuser&response_type=code&scope=snsapi_base&state=123#wechat_redirect'
                        ),
                        array(
                            'name'=>urlencode('黑户贷款'),
                            'type'=>'view',
                            // 'url'=>'http://'.C('url1').'/card/Public/123/blackuser.html'
                            'url'=>'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.C('const.appid').'&redirect_uri=http%3a%2f%2f'.C('url1').'%2fcard%2findex.php%2fHome%2fCard%2fblackuser&response_type=code&scope=snsapi_base&state=123#wechat_redirect'
                        ),//第二个二级菜单
                    )
                ),
                array(
                    'name'=>urlencode('学习交流'),
                    'sub_button'=>array(
                        array(
                            'name'=>urlencode('信用卡知识'),
                            'type'=>'view',
                            'url'=>'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.C('const.appid').'&redirect_uri=http%3a%2f%2f'.C('url1').'%2fcard%2findex.php%2fHome%2fCard%2findexa&response_type=code&scope=snsapi_base&state=123#wechat_redirect'
                        ),
                        array(
                            'name'=>urlencode('金融理财知识'),
                            'type'=>'view',
                            'url'=>'http://'.C('url1').'/card/index.php/Home/Card/fin'
                        ),
                        array(
                            'name'=>urlencode('钱宝商城'),
                            'type'=>'view',
                            // 'key'=>'qianbaoshangcheng'
                            'url'=>'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.C('const.appid').'&redirect_uri=http%3a%2f%2f'.C('url1').'%2fcard%2findex.php%2fHome%2fCard%2fshangcheng&response_type=code&scope=snsapi_base&state=123#wechat_redirect'
                        ),
                        array(
                            'name'=>urlencode('联系我们'),
                            'type'=>'view',
                            'url'=>'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.C('const.appid').'&redirect_uri=http%3a%2f%2f'.C('url1').'%2fcard%2findex.php%2fHome%2fCard%2fabout&response_type=code&scope=snsapi_base&state=123#wechat_redirect'
                        ),
                    )
                ),
                array(
                    'name'=>urlencode('会员专区'),
                    'sub_button'=>array(
                        array(
                            'name'=>urlencode('注册会员'),
                            'type'=>'view',
                            'url'=>'http://'.C('url1').'/card/index.php/Home/Login/index'
                        ),
                        array(
                            'name'=>urlencode('会员中心'),
                            'type'=>'view',
                            // 'key'=>'huiyuanzhongxin'
                            'url'=>'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.C('const.appid').'&redirect_uri=http%3a%2f%2f'.C('url1').'%2fcard%2findex.php%2fHome%2fCard%2fhuiyuanzhongxin&response_type=code&scope=snsapi_base&state=123#wechat_redirect'
                        ),
                    )
                ),

        ));
        echo  $postJson = urldecode(json_encode($postArr));
        echo "==================这是postJson=======================";
        $res = $this->http_curl($url,'post','json',$postJson);
        dump($res);
    }

    //获取access_token值     
    public function  getWxAccessToken(){
        $access_tokenvalue =  M('access_tokenvalue');
        $token=$access_tokenvalue->order('id desc')->find();
        // dump($token);exit;
        // if(1 != 1){
        if($token['access_token'] && $token['expire_time']>time()){
          //如果access_token在session没有过期
            echo "有";
            echo $_SESSION['access_token'];
            return $token['access_token'];
        }
        else{
            //如果access_token比存在或者已经过期，重新取access_token
            //1 请求url地址 
            // $appid='wx426451259ba576c6';
            // $secret='50c767c3a2ae87909bab6234879584da';
            $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".C('const.appid')."&secret=".C('const.secret');
            // dump($url);exit;
            $res=$this->http_curl($url,'get','json');
            echo $res;
            $access_token =$res['access_token'];
            //将重新获取到的aceess_token存到session
            $data['access_token']=$access_token;
            $data['expire_time']=time()+7000;
            $access_tokenvalue->add($data);
            echo "无";exit;
            echo $access_token;
            return $access_token;
        }
    }

    //判断用户是否关注过微信号
    // public function guanzhu(){

    //     $access_token = $this->getWxAccessToken();
    //     $subscribe_msg = 'https://api.weixin.qq.com/cgi-bin/user/info?access_token='.$access_token.'&openid='.$_GET['openid'];
    //     $res=$this->http_curl($url,'get','json');
    //     $zyxx = $res -> subscribe;
         
    //     if ($zyxx !== 1) {
    //         echo '未关注！';
    //     }else{
    //         echo  '已关注！';
    //     }
    // }
    
}