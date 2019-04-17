<?php
namespace Admin\Controller;
use Think\Controller;
// use My\Data;
use Think\Page;
use Think\ajax;
class TeamController extends AllowController {

    //封装一个方法，传进一个父类Id，返回其下的所有子类集合
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


    //加载团队列表页
    public function index(){
        //实例化Model类
        $weixin_user = M('weixin_user');
        if($_GET['name']){
            $name=$_GET['name'];
            // dump($name);exit;
            $userid=$weixin_user->where(array('name'=>$name))->field('id')->find();
            $Id=$userid['id'];
            $info = $weixin_user->select();
            $info=$this->subtrr($info,$Id);
            $len=$_GET['len'];

            // dump($info);exit;

            $userinfo=array();
            if($len != 4){
                foreach($info as $k=>$v){
                    if($v['len'] == $len){
                        $userinfo[]=$v;
                    }
                }
                foreach($userinfo as $key=>$value){
                    //计算他是第几级
                    $len=$value['len']-1;           
                    //拼接分隔符  重复字符串
                    $list[$key]['name']    = $value['weixin_name'];
                    $list[$key]['id']      = $value['id'];
                    $list[$key]['money']   = $value['money'];
                    $list[$key]['addtime'] = $value['weixin_addtime'];
                }
            }else{
                foreach($info as $key=>$value){
                    //计算他是第几级
                    $len=$value['len']-1;           
                    //拼接分隔符  重复字符串
                    $list[$key]['name']=str_repeat('——|',$len).$value['weixin_name'];
                    $list[$key]['id']=$value['id'];
                    $list[$key]['money']=$value['money'];
                    $list[$key]['addtime']=$value['weixin_addtime'];
                    $list[$key]['len']=$value['len'];
                }                
            }
            // dump($list);exit;
            //总长
            $Total = count($list);
            //导入分页类
            $Page = getpage($Total,10);
            $list=array_slice($list,$Page->firstRow,$Page->listRows);

            // dump($list);exit;
            $Page = $Page->show();
            $this->assign('Page',$Page);
            $this->assign('list',$list);
            $this->assign('name',$name);
        }
            //加载模板
            $this->display();            
    }
}