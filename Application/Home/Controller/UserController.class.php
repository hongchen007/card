<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {

    Public static function subtrr($arr,$Id,$len=1){
        $subs = array();
        foreach($arr as $k=>$v){
            if($v['pid'] == $Id){
                $v['len'] = $len;
                if($v['len'] > 3){
                    continue;
                }
                $subs[] = $v;
                $subs = array_merge($subs,self::subtrr($arr,$v['id'],$len+1));
            }
        }
        return $subs;
    }
    //会员中心
    public function index(){
        //实例化
        $weixin_user = M('weixin_user');
        $recode = M('recode');
        // //接收数据
        $where['openid'] = $_GET['openid'];
        //带审核
        $map1['grade'] = 1;
        $waitmoney = $recode->where($where)->where($map1)->field('money')->select();
        foreach($waitmoney as $k=>$v){
            $wait += $v['money'];
        }
        //已提现
        $map2['grade'] = 2;
        $tixianmoney = $recode->where($where)->where($map2)->field('money')->select();
        foreach($tixianmoney as $k=>$v){
            $tixian += $v['money'];
        }
        //查询数据
        $userinfo = $weixin_user->where($where)->field('weixin_headimgurl,weixin_name,openid,weixin_addtime,id,money')->find();
        //加载页面
        $this->assign('userinfo',$userinfo);
        $this->assign('wait',$wait);
        $this->assign('tixian',$tixian);
        $this->display(); 
    }
    //个人中心
    public function person(){
        //实例化
        $weixin_user = M('weixin_user');
        $recode = M('recode');
        //接收数据
        $where['openid'] = $_GET['openid'];
        $openid = $_GET['openid'];
        //查询数据
        //自己信息
        $selfinfo = $weixin_user->where($where)->field('id,weixin_name,pid,weixin_addtime,weixin_headimgurl,money,grade')->find();
        $where2['id'] = $selfinfo['pid'];
        //推荐人微信名
        $tuijian_name = $weixin_user->where($where2)->field('weixin_name')->find();
        //会员累计收益(自己的余额加上已近提现的和申请提现的,无论是金卡会员还是银卡会员)
        $map['user_id'] = $selfinfo['id'];
        $recodeinfo = $recode->where($map)->field('money,grade')->select();
        $money = 0;
        foreach($recodeinfo as $k=>$v){
            if($v['grade'] == 1 || $v['grade'] == 2){
                $money += $v['money'];
            }
        }
        $money = $money + $selfinfo['money'];
        //分配数据，加载模板
        $this->assign('money',$money);
        $this->assign('selfinfo',$selfinfo);
        $this->assign('tuijian_name',$tuijian_name);
        $this->display();
    }
    //我的团队
    public function mytream(){
        //实例化
        $weixin_user = M('weixin_user');
        $recode = M('recode');
        //接收数据
        $where['openid'] = $openid = $_GET['openid'];
        //查询数据
        $userinfo = $weixin_user->where($where)->field('id,weixin_name')->find();
        $id = $userinfo['id'];
        $user = $weixin_user->field('id,pid,openid,money,weixin_name')->select();
        $treaminfo = $this->subtrr($user,$id);
        // dump($treaminfo);exit;
        $oneinfo = array();
        $twoinfo = array();
        $threeinfo = array();
        foreach($treaminfo as $k=>$v){
            if($v['len'] == 1){
                $oneinfo[] = $v;
            }
            if($v['len'] == 2){
                $twoinfo[] = $v;
            }
            if($v['len'] == 3){
                $threeinfo[] = $v;
            }
        }
        //每一级下面有多少人
        $sumone = count($oneinfo);
        $sumtwo = count($twoinfo);
        $sumthree = count($threeinfo);

        //一级拥金排行计算
        foreach($oneinfo as $k=>$v){
            $map['user_id'] = $v['id'];
            $recodeinfo = $recode->where($map)->field('money,grade')->select();
            // dump($recodeinfo);exit;
            $onemoney = 0;
            foreach($recodeinfo as $ke=>$va){
                if($va['grade'] == 1 || $va['grade'] == 2){
                    $onemoney += $va['money'];
                }
            }
            $oneinfo[$k]['money'] = $onemoney + $oneinfo[$k]['money'];
        }
        //按照money从大道小排序
        $sort = array(
                'direction' => 'SORT_DESC', //排序顺序标志 SORT_DESC 降序；SORT_ASC 升序
                'field'     => 'money',       //排序字段
        );
        $arrSort = array();
        foreach($oneinfo AS $uniqid => $row){
            foreach($row AS $key=>$value){
                $arrSort[$key][$uniqid] = $value;
            }
        }
        if($sort['direction']){
            array_multisort($arrSort[$sort['field']], constant($sort['direction']), $oneinfo);
        }
        //来个名次
        $one = 0;
        foreach($oneinfo as $k=>$v){
            $one = $one + 1;
            $oneinfo[$k]['one'] = $one;
        }

       //二级拥金排行计算
        foreach($twoinfo as $k=>$v){
            $map['user_id'] = $v['id'];
            $recodeinfo = $recode->where($map)->field('money,grade')->select();
            // dump($recodeinfo);exit;
            $onemoney = 0;
            foreach($recodeinfo as $ke=>$va){
                if($va['grade'] == 1 || $va['grade'] == 2){
                    $onemoney += $va['money'];
                }
            }
            $twoinfo[$k]['money'] = $onemoney + $twoinfo[$k]['money'];
        }
        //按照money从大道小排序
        $sort = array(
                'direction' => 'SORT_DESC', //排序顺序标志 SORT_DESC 降序；SORT_ASC 升序
                'field'     => 'money',       //排序字段
        );
        $arrSort = array();
        foreach($twoinfo AS $uniqid => $row){
            foreach($row AS $key=>$value){
                $arrSort[$key][$uniqid] = $value;
            }
        }
        if($sort['direction']){
            array_multisort($arrSort[$sort['field']], constant($sort['direction']), $twoinfo);
        }
        //来个名次
        $one = 0;
        foreach($twoinfo as $k=>$v){
            $one = $one + 1;
            $twoinfo[$k]['one'] = $one;
        }

       //三级拥金排行计算
        foreach($threeinfo as $k=>$v){
            $map['user_id'] = $v['id'];
            $recodeinfo = $recode->where($map)->field('money,grade')->select();
            // dump($recodeinfo);exit;
            $onemoney = 0;
            foreach($recodeinfo as $ke=>$va){
                if($va['grade'] == 1 || $va['grade'] == 2){
                    $onemoney += $va['money'];
                }
            }
            $threeinfo[$k]['money'] = $onemoney + $threeinfo[$k]['money'];
        }
        //按照money从大道小排序
        $sort = array(
                'direction' => 'SORT_DESC', //排序顺序标志 SORT_DESC 降序；SORT_ASC 升序
                'field'     => 'money',       //排序字段
        );
        $arrSort = array();
        foreach($threeinfo AS $uniqid => $row){
            foreach($row AS $key=>$value){
                $arrSort[$key][$uniqid] = $value;
            }
        }
        if($sort['direction']){
            array_multisort($arrSort[$sort['field']], constant($sort['direction']), $threeinfo);
        }
        //来个名次
        $one = 0;
        foreach($threeinfo as $k=>$v){
            $one = $one + 1;
            $threeinfo[$k]['one'] = $one;
        }

        //分配数据，加载模板
        $this->assign('sumone',$sumone);
        $this->assign('sumtwo',$sumtwo);
        $this->assign('sumthree',$sumthree);
        $this->assign('oneinfo',$oneinfo);
        $this->assign('twoinfo',$twoinfo);
        $this->assign('threeinfo',$threeinfo);
        $this->assign('userinfo',$userinfo);
        $this->display();
    }
    //一级会员
    public function oneinfo(){
        $this->display();
    }
    //我的信息
    public function mymsg(){
        //实例化
        $weixin_user = M('weixin_user');
        //接收数据
        $where['openid'] = $_GET['openid'];
        $weixin_user = $weixin_user->where($where)->field('weixin_name,weixin_headimgurl,random')->find();
        if($weixin_user['random']){
        }else{
            $this->error('请先重置二维码');
        }
        //分配数据，加载模板
        $this->assign('weixin_user',$weixin_user);
        $this->display();
    }
    //推广须知
    public function push(){
        //实例化
        $article_genera = M('article_genera');
        //查询数据
        $info = $article_genera->find();
        // dump($info);exit;
        //分配数据，加载模板
        $this->assign('info',$info);
        $this->display();
    }


    //合作共赢
    public function cooparate(){
        $this->display();
    }
    //我的钱包
    public function mypurse(){
        //实例化
        $weixin_user = M('weixin_user');
        $recode      = M('recode');
        //接收数据
        $where['openid'] = $_GET['openid'];
        //查询数据
        $userinfo = $weixin_user->where($where)->field('id,money,weixin_name,weixin_headimgurl,openid')->find();
        $map['openid'] = $userinfo['openid'];
        $recodeinfo = $recode->where($map)->field('money,grade')->select();
        $money = 0;
        $txmoney = 0;
        foreach($recodeinfo as $k=>$v){
            if($v['grade'] == 1 || $v['grade'] == 2){
                $money += $v['money'];
            }
            if($v['grade'] == 2){
                $txmoney += $v['money'];
            }
        }
        $userinfo['summoney'] = $userinfo['money'] + $money;
        $userinfo['txmoney']  = $txmoney;
        //月收益
        $thismonth_start=date('Y-m-d H:i:s',mktime(0,0,0,date('m'),1,date('Y')));
        $thismonth_end=date('Y-m-d H:i:s',mktime(23,59,59,date('m'),date('t'),date('Y')));
        $map1['addtime'] = array('BETWEEN', array($thismonth_start,$thismonth_end));
        $map2['grade'] = 4;
        $mmoney = $recode->where($map)->where($map1)->where($map2)->field('id,money')->select();
        $monthmoney = 0;
        foreach($mmoney as $k=>$v){
            $monthmoney += $v['money'];
        }
        $userinfo['monthmoney'] = $monthmoney;
        //分配数据，加载模板
        $this->assign('info',$userinfo);
        $this->display();
    }
    //我的榜样
    public function hero(){
        //实例化
        $case = M('case');
        //查询数据
        $info = $case->find();
        //加载模板，分配变量
        $this->assign('info',$info);
        $this->display();
    }
    //重置random
    public function resetrandom(){
        //实例化
        $weixin_user = M('weixin_user');
        $random = rand(111111,999999);
        $info = $weixin_user->where("random=$random")->find();
        if($info){
            self::resetrandom();
        }
        return $random;
    }    
    //推广二维码
    public function resetcode(){
        //实例化
        $weixin_user = M('weixin_user');
        //接受值
        $data['id'] = $where['id'] = $id = $_GET['id'];
        $userinfo = $weixin_user->where($where)->field('random')->find();
        $map['random'] = $userinfo['random'];
        // dump($userinfo);exit;
        if($userinfo['random'] == null || $userinfo['random'] == ''){
            $data['random'] = $this->resetrandom();
            $random = $data['random'];
            if($weixin_user->save($data)){
                //因为random为空，所以没有填写邀请码
                $selfpid = 'no';
                $this->assign('id',$id);
                $this->assign('selfpid',$selfpid);
                $this->assign('random',$random);
                $this->display();
            }else{
                $this->error('重置二维码失败');
            }             
        }else{
            //判断是否已经填写邀请码,等价于是否有pid
            $userid = $weixin_user->where($map)->field('id,pid')->find();
            $map1['id'] = $userid['pid'];
            if($userid['pid'] == null || $userid['pid'] == ''){
                //不存在
                $selfpid = 'no';
            }else{
                //存在
                $userpid = $weixin_user->where($map1)->field('random')->find();
                $userrandom = $userpid['random'];
                $selfpid = 'yes';
                $this->assign('userrandom',$userrandom);
            }
            // dump($map1);
            // dump($userpid);
            // dump($userid);exit;
            $this->assign('id',$id);
            $this->assign('selfpid',$selfpid);
            $this->assign('random',$userinfo['random']);
            $this->display();

        }
    }
    //执行添加邀请码操作
    public function invite(){
        //实例化
        $weixin_user = M('weixin_user');
        $recode      = M('recode');
        $goods       = M('goods');
        //开启事物
        M()->startTrans();
        //接收数据、
        $where1['id'] = I('post.id','','strip_tags');      
        $where['random'] = I('post.random','','strip_tags');
        //判断自己的等级
        $info = $weixin_user->where($where1)->field('id,grade')->find();
        if($info['grade'] == 1){
            $goodsinfo = $goods->where("id=2")->field('price')->find();
        }else{
            $goodsinfo = $goods->where("id=1")->field('price')->find();
        }
        //价格
        $basemoney = $goodsinfo['price'];
        //由random得上一级信息
        $pinfo = $weixin_user->where($where)->field('id,grade,pid,money,openid')->find();
        // dump($pinfo);
        $data['pid'] = $pinfo['id'];
        $selfpid = $weixin_user->where($where1)->save($data);//给自己加pid
        // 上一级的等级得利,首先判断是类型（银卡）
        if($pinfo['grade'] == 1){
            $data1['money'] = (0.6)*($basemoney)+$pinfo['money'];
            // dump($data1);
            $addmoney1 = $weixin_user->where($where)->save($data1);//给上一级银卡加钱
            $date1['user_id'] = $pinfo['id'];
            $date1['money']   = $data1['money'];
            $date1['grade']   = 4;
            $date1['addtime'] = date('Y-m-d H:i:s');
            $date1['openid']  = $pinfo['openid'];
            // dump($date1);exit;
            $addrecode1 = $recode->add($date1);     //====添加加钱记录====
            //上二级得利,首先判断有没有上二级，(没有上二级)
            if($pinfo['pid'] == null || $pinfo['pid'] == ''){ 
                if($addmoney1 && $selfpid && $addrecode1){
                    M()->commit();
                    $this->ajaxreturn(1);//上二级没有，操作成功
                }else{
                    M()->rollback();
                    $this->ajaxreturn(2);//上二级没有，操作失败
                }
            }else{
                //上二级得利,(有上二级),上二级的id
                $where2['id'] = $pinfo['pid'];
                //上二级信息
                $ppinfo = $weixin_user->where($where2)->field('id,grade,pid,money,openid')->find();
                //判断上二级类型，在判断有没有上三级
                if($ppinfo['grade'] == 1){
                    //此时是银卡不加钱
                    //判断是否有上三级
                    if($ppinfo['pid'] == null || $ppinfo['pid'] == ''){
                        //没有上三级
                        if($addmoney1 && $selfpid && $addrecode1){
                            M()->commit();
                            $this->ajaxreturn(1);//上三级没有，操作成功
                        }else{
                            M()->rollback();
                            $this->ajaxreturn(2);//上三级没有，操作失败
                        }
                    }else{
                        //有上三级
                        $where3['id'] = $ppinfo['pid'];
                        //上三级信息
                        $pppinfo = $weixin_user->where($where3)->field('id,grade,money,openid')->find();
                        // dump($pppinfo);exit;
                        //判断上三级类型
                        if($pppinfo['grade'] == 1){
                            //此时银卡不加钱
                            if($addmoney1 && $selfpid && $addrecode1){
                                M()->commit();
                                $this->ajaxreturn(1);//操作成功
                            }else{
                                M()->rollback();
                                $this->ajaxreturn(2);//操作失败
                            }
                        }else{
                            //金卡加0.2
                            $data3['money'] = $pppinfo['monry'] + (0.2)*($basemoney);
                            $addmoney3 = $weixin_user->where($where3)->save($data3);    //上三级金卡加钱
                            $date3['user_id'] = $pppinfo['id'];
                            $date3['money']   = $data3['money'];
                            $date3['grade']   = 4;
                            $date3['addtime'] = date('Y-m-d H:i:s');
                            $date3['openid']  = $pppinfo['openid'];
                            $addrecode3 = $recode->add($date3);     //====添加加钱记录====
                            if($addmoney1 && $addmoney3 && $selfpid && $addrecode1 && $addrecode3){
                                M()->commit();
                                $this->ajaxreturn(1);//操作成功
                            }else{
                                M()->rollback();
                                $this->ajaxreturn(2);//操作失败
                            }
                        }                         
                    }
                }else{
                    //上二级金卡
                    $data2['money'] = $ppinfo['money'] + (0.15)*($basemoney);
                    $addmoney2 = $weixin_user->where($where2)->save($data2);//上二级金卡加钱
                    $date2['user_id'] = $ppinfo['id'];
                    $date2['money']   = $data2['money'];
                    $date2['grade']   = 4;
                    $date2['addtime'] = date('Y-m-d H:i:s');
                    $date2['openid']  = $ppinfo['openid'];
                    $addrecode2 = $recode->add($date2);     //====添加加钱记录====
                    //判断有没有上三级
                    if($ppinfo['pid'] == null || $ppinfo['pid'] == ''){
                       if($addmoney1 && $selfpid && $addmoney2 && $addrecode1 && $addrecode2){
                            M()->commit();
                            $this->ajaxreturn(1);//上三级没有，操作成功
                        }else{
                            M()->rollback();
                            $this->ajaxreturn(2);//上三级没有，操作失败
                        }
                    }else{
                        //上三级得利,(有上三级),上三级的id
                        $where3['id'] = $ppinfo['pid'];
                        //上三级信息
                        $pppinfo = $weixin_user->where($where3)->field('id,grade,money,openid')->find();
                        //判断上三级类型
                        if($pppinfo['grade'] == 1){
                            //此时银卡不加钱
                            if($addmoney1 && $addmoney2 && $selfpid && $addrecode2){
                                M()->commit();
                                $this->ajaxreturn(1);//操作成功
                            }else{
                                M()->rollback();
                                $this->ajaxreturn(2);//操作失败
                            }
                        }else{
                            //金卡加0.2
                            $data3['money'] = $pppinfo['monry'] + (0.2)*($basemoney);
                            $addmoney3 = $weixin_user->where($where3)->save($data3);    //上三级金卡加钱
                            $date3['user_id'] = $pppinfo['id'];
                            $date3['money']   = $data3['money'];
                            $date3['grade']   = 4;
                            $date3['addtime'] = date('Y-m-d H:i:s');
                            $date3['openid']  = $pppinfo['openid'];
                            $addrecode3 = $recode->add($date3);     //====添加加钱记录====
                            if($addmoney1 && $addmoney2 && $addmoney3 && $selfpid && $addrecode2 && $addrecode3){
                                M()->commit();
                                $this->ajaxreturn(1);//操作成功
                            }else{
                                M()->rollback();
                                $this->ajaxreturn(2);//操作失败
                            }
                        }                 
                    }
                }  
            }
        }else{
            //上一级的等级得利,（金卡卡）
            $data1['money'] = (0.35)*($basemoney)+$pinfo['money'];
            $addmoney1 = $weixin_user->where($where)->save($data1); //给上一级金卡加钱
            $date1['user_id'] = $pinfo['id'];
            $date1['money']   = $data1['money'];
            $date1['grade']   = 4;
            $date1['addtime'] = date('Y-m-d H:i:s');
            $date1['openid']  = $pinfo['openid'];
            // dump($date1);exit;
            $addrecode1 = $recode->add($date1);     //====添加加钱记录====
            //上二级得利,首先判断有没有上二级，(没有上二级)
            if($pinfo['pid'] == null || $pinfo['pid'] == ''){ 
                if($addmoney1 && $selfpid && $addrecode1){
                    M()->commit();
                    $this->ajaxreturn(1);//上二级没有，操作成功
                }else{
                    M()->rollback();
                    $this->ajaxreturn(2);//上二级没有，操作失败
                }
            }else{
                //上二级得利,(有上二级),上二级的id
                $where2['id'] = $pinfo['pid'];
                //上二级信息
                $ppinfo = $weixin_user->where($where2)->field('id,grade,pid,money')->find();
                //判断上二级类型，在判断有没有上三级
                if($ppinfo['grade'] == 1){
                    //此时是银卡不加钱
                    //判断是否有上三级
                    if($ppinfo['pid'] == null || $ppinfo['pid'] == ''){
                        //没有上三级
                        if($addmoney1 && $selfpid && $addrecode1){
                            M()->commit();
                            $this->ajaxreturn(1);//上三级没有，操作成功
                        }else{
                            M()->rollback();
                            $this->ajaxreturn(2);//上三级没有，操作失败
                        }
                    }else{
                        //有上三级
                        $where3['id'] = $ppinfo['pid'];
                        //上三级信息
                        $pppinfo = $weixin_user->where($where3)->field('id,grade,money')->find();
                        // dump($pppinfo);exit;
                        //判断上三级类型
                        if($pppinfo['grade'] == 1){
                            //此时银卡不加钱
                            if($addmoney1 && $selfpid && $addrecode1){
                                M()->commit();
                                $this->ajaxreturn(1);//操作成功
                            }else{
                                M()->rollback();
                                $this->ajaxreturn(2);//操作失败
                            }
                        }else{
                            //金卡加0.2
                            $data3['money'] = $pppinfo['monry'] + (0.2)*($basemoney);
                            $addmoney3 = $weixin_user->where($where3)->save($data3);    //上三级金卡加钱
                            $date3['user_id'] = $pppinfo['id'];
                            $date3['money']   = $data3['money'];
                            $date3['grade']   = 4;
                            $date3['addtime'] = date('Y-m-d H:i:s');
                            $date3['openid']  = $pppinfo['openid'];
                            $addrecode3 = $recode->add($date3);     //====添加加钱记录====
                            if($addmoney1 && $addmoney3 && $selfpid && $addrecode1 && $addrecode3){
                                M()->commit();
                                $this->ajaxreturn(1);//操作成功
                            }else{
                                M()->rollback();
                                $this->ajaxreturn(2);//操作失败
                            }
                        }                         
                    }
                }else{
                    //上二级金卡
                    $data2['money'] = $ppinfo['money'] + (0.15)*($basemoney);
                    // dump($data2);exit;
                    $addmoney2 = $weixin_user->where($where2)->save($data2);//上二级金卡加钱
                    $date2['user_id'] = $ppinfo['id'];
                    $date2['money']   = $data2['money'];
                    $date2['grade']   = 4;
                    $date2['addtime'] = date('Y-m-d H:i:s');
                    $date2['openid']  = $ppinfo['openid'];
                    $addrecode2 = $recode->add($date2);     //====添加加钱记录====
                    //判断有没有上三级
                    if($ppinfo['pid'] == null || $ppinfo['pid'] == ''){
                       if($addmoney1 && $selfpid && $addmoney2 && $addrecode1 && $addrecode2){
                            M()->commit();
                            $this->ajaxreturn(1);//上三级没有，操作成功
                        }else{
                            M()->rollback();
                            $this->ajaxreturn(2);//上三级没有，操作失败
                        }
                    }else{
                        //上三级得利,(有上三级),上三级的id
                        $where3['id'] = $ppinfo['pid'];
                        //上三级信息
                        $pppinfo = $weixin_user->where($where3)->field('id,grade,money')->find();
                        // dump($pppinfo);exit;
                        //判断上三级类型
                        if($pppinfo['grade'] == 1){
                            //此时银卡不加钱
                            if($addmoney1 && $addmoney2 && $selfpid && $addrecode1){
                                M()->commit();
                                $this->ajaxreturn(1);//操作成功
                            }else{
                                M()->rollback();
                                $this->ajaxreturn(2);//操作失败
                            }
                        }else{
                            //金卡加0.2
                            $data3['money'] = $pppinfo['monry'] + (0.2)*($basemoney);
                            $addmoney3 = $weixin_user->where($where3)->save($data3);    //上三级金卡加钱
                            $date3['user_id'] = $pppinfo['id'];
                            $date3['money']   = $data3['money'];
                            $date3['grade']   = 4;
                            $date3['addtime'] = date('Y-m-d H:i:s');
                            $date3['openid']  = $pppinfo['openid'];
                            $addrecode3 = $recode->add($date3);     //====添加加钱记录====
                            if($addmoney1 && $addmoney2 && $addmoney3 && $selfpid && $addrecode1 && $addrecode3){
                                M()->commit();
                                $this->ajaxreturn(1);//操作成功
                            }else{
                                M()->rollback();
                                $this->ajaxreturn(2);//操作失败
                            }
                        }                 
                    }
                }  
            }
        }
    }

    //提现
    public function tixian(){
        //接收数据
        $id = I('get.id','','strip_tags');
        //加载页面
        $this->assign('id',$id);
        $this->display();
    }
    //提现到支付宝页面
    public function zhifubao(){
        //接收值
        $id = I('get.id','','strip_tags');
        //加载页面
        $this->assign('id',$id);
        $this->display();
    }
    //提现到银行卡页面
    public function yinhangka(){
        //接收值
        $id = I('get.id','','strip_tags');
        //加载页面
        $this->assign('id',$id);
        $this->display();
    }
    //提现到支付宝
    public function dozfb(){
        //实例化
        $weixin_user = M('weixin_user');
        $recode = M('recode');
        //接收数据
        $zfb = I('post.zfb','','strip_tags');
        $money = I('post.money','','strip_tags');
        $where['id'] = $id = I('post.userid','','strip_tags');
        //验证、
        $userinfo = $weixin_user->where($where)->find();
        // dump($money);
        if($zfb){
            if($money){
                if($userinfo['money'] >= $money){
                    M()->startTrans(); //开启事物
                    //更改钱
                    $data['money'] = $userinfo['money'] - $money;
                    $info1 = $weixin_user->where($where)->save($data);
                    //提现记录
                    $date['zfb']     = $zfb;
                    $date['user_id'] = $id;
                    $date['addtime'] = date("Y-m-d H:i:s");
                    $date['grade']   = 1;
                    $date['money']   = $money;
                    $date['openid']  = $userinfo['openid'];
                    $info2 = $recode->add($date);
                    if($info1 && $info2){
                        M()->commit();//事物成功
                        $this->ajaxreturn(4);//申请提现成功
                    }else{
                        M()->rollback();
                        $this->ajaxreturn(5);//申请提现失败
                    }
                }else{
                    $this->ajaxreturn(3);//提现金额不能大于账户余额
                }
            }else{
                $this->ajaxreturn(2);//金额不能为空
            }
        }else{
            $this->ajaxreturn(1);//账户不能为空
        }
    }
    //提现到银行卡
    public function doyhk(){
        //实例化
        $weixin_user = M('weixin_user');
        $recode = M('recode');
        //接收数据
        $name    = I('post.name','','strip_tags');
        $cardnum = I('post.cardnum','','strip_tags');
        $money   = I('post.money','','strip_tags');
        $where['id'] = $id = I('post.userid','','strip_tags');
        //验证、
        $userinfo = $weixin_user->where($where)->find();
        if($name){
            if($cardnum){
                if($money){
                    if($userinfo['money'] >= $money){
                        M()->startTrans(); //开启事物
                        //更改钱
                        $data['money'] = $userinfo['money'] - $money;
                        $info1 = $weixin_user->where($where)->save($data);
                        //提现记录
                        $date['name']    = $name;
                        $date['cardnum'] = $cardnum;
                        $date['user_id'] = $id;
                        $date['addtime'] = date("Y-m-d H:i:s");
                        $date['grade']   = 1;
                        $date['money']   = $money;
                        $date['openid']  = $userinfo['openid'];
                        $info2 = $recode->add($date);
                        // dump($date);exit;
                        if($info1 && $info2){
                            M()->commit();//事物成功
                            $this->ajaxreturn(5);//申请提现成功
                        }else{
                            M()->rollback();
                            $this->ajaxreturn(6);//申请提现失败
                        }
                    }else{
                        $this->ajaxreturn(4);//提现金额不能大于账户余额
                    }
                }else{
                    $this->ajaxreturn(3);//金额不能为空
                }
            }else{
                $this->ajaxreturn(2);//卡号不能为空
            }
        }else{
            $this->ajaxreturn(1);//姓名不能为空
        }
    }

}