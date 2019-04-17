<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends AllowController {
    //加载商品列表页
    public function index(){
        //实例化
        $goods=M('goods');
    	$weixin_user=M('weixin_user');
        //搜索条件
        $where1=array();
        if(!empty($_GET['name'])){
            $where1['name'] = array('like',"%{$_GET['name']}%");
        }
        if(!empty($_GET['state'])){
            $where1['state'] = $_GET['state'];
        }
        $count = $goods->where($where1)->count();
        $p = getpage($count,10);
        $info = $goods->where($where1)->limit($p->firstRow, $p->listRows)->select();
        // dump($info);exit;

        $userinfo=array();
        foreach($info as $k=>$v){
            $userinfo[]=$weixin_user->where(array('id'=>$v['user_id']))->field('weixin_name')->find();
        }
        // foreach($info as $ke=>$va){
        //     $info[$ke]['user_wechat_name']=$userinfo[$ke]['weixin_name'];
        // }
        //加载模板
        $this->assign('info',$info);
        $this->assign('page', $p->show());
        $this->display();
    }
    //添加商品页面
    public function add(){
        //实例化吧
        $user=M('user');
    	//加载模板
    	$this->display();
    }
    //执行添加
    public function insert(){
        //实例化
    	$goods=M('goods');
        $weixin_user=M('weixin_user');
    	$rules=array(
            array('name','require','商品名不能为空'),
            array('des','require','商品描述不能为空'),
    		array('price','require','商品价格不能为空'),
    		array('price','/^[0-9]+(.[0-9]{1,2})?$/','商品价格格式不对')
    	);
       	if (!$goods->validate($rules)->create()){     
            // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $this->error($goods->getError());
        }
    	//实例化文件上传类
        $upload=new \Think\Upload();
        //设置参数
        $upload->maxSize=0;//允许上传图片大小
        $upload->exts=array('jpg','jpeg','png','gif');//允许上传图片类型
        $upload->rootPath="./Public/Uploads/";//保存上传图片路径
        //执行上传
        $info=$upload->upload();
        if(!$info){
            $this->error($upload->getError());
        }else{
            //遍历
            foreach($info as $key=>$file){
                $path=$file['savepath'].$file['savename'];
            }
        }
        // $where['weixin_name']=I('post.wechat_name','','strip_tags');
        // $userinfo=$weixin_user->where($where)->field('id')->find();
        // // dump($userinfo);exit;
        // if(!$userinfo){
        //     $this->error('商品商户微信号不存在');
        // }
        // $data['user_id']=$userinfo['id'];
        $data['name']=I('post.name','','strip_tags');
        $data['des']=I('post.des','','strip_tags');
        $data['price']=I('post.price','','strip_tags');
        $data['addtime']=date('Y-m-d H:i:s',time());
        $data['pic']=$path;

        // dump($data);exit;
        if($goods->add($data)){
        	$this->success('添加成功',U('Goods/index'));
        }else{
        	$this->error('添加失败');
        }
    }
    //删除商品
    public function del(){
    	//实例化
    	$goods = M('goods');
    	//接收值
    	$id = $_GET['id'];
    	//删除数据库数据
        $row = $goods->where("id=$id")->find(); 
    	$info = $goods->where("id=$id")->delete();
    	//返回
		if($info){
		    $this->success('删除成功', U('goods/index'));
            unlink('./Public/Uploads/'.$row['pic']);//删除图片
		} else {
		    $this->error('删除失败');
		}
    }
    //加载修改商品页面
    public function edit(){
        //实例化
        $goods=M('goods');
        $weixin_user=M('weixin_user');
    	//接收值
    	$id = $_GET['id'];
        //查询数据
        $info=$goods->where("id=$id")->find();
        $userinfo=$weixin_user->where(array('id'=>$info['user_id']))->field('weixin_name')->find();
        $info['user_wechat_name']=$userinfo['weixin_name'];
        // dump($userinfo);exit;
    	//加载页面，分配数据
    	$this->assign('info',$info);
    	$this->display();
    }
    //执行修改
    public function doedit(){
        //实例化Model类
        $goods = M('goods'); 
        $weixin_user = M('weixin_user');

    	$rules=array(
    		array('name','require','商品名不能为空'),
            array('des','require','商品描述不能为空'),
            array('price','require','商品价格不能为空'),
            array('price','/^[0-9]+(.[0-9]{1,2})?$/','商品价格不对')
    	);
       	if (!$goods->validate($rules)->create()){     
            // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $this->error($goods->getError());
        }

        // $where['weixin_name']=I('post.user_wechat_name','','strip_tags');
        // $userinfo=$weixin_user->where($where)->field('id,weixin_name')->find();
        // if(!$userinfo){
        //     $this->error('商品商户微信号不存在');
        // }
        // $data['user_id']=$userinfo['id'];
        $data['name']=I('post.name','','strip_tags');
        $data['state']=I('post.state','','strip_tags');
        $data['des']=I('post.des','','strip_tags');
        $data['price']=I('post.price','','strip_tags');
        $id=I('post.id','','strip_tags');
        $pic=I('post.xgpic','','strip_tags');
        $row=$goods->find($id);

   		// dump($data);exit; 	
        //判断是否修改头像
        if($pic == null){
            //执行修改
            if($goods->where("id=$id")->save($data)){
                $this->success('修改成功',U('Goods/index'));
            }else{
                $this->error('修改失败');
            }
        }else{
            //实例化文件上传类
            $upload=new \Think\Upload();
            //设置参数
            $upload->maxSize=0;//允许上传图片大小
            $upload->exts=array('jpg','jpeg','png','gif');//允许上传图片类型
            $upload->rootPath="./Public/Uploads/";//保存上传图片路径
            //执行上传
            $info=$upload->upload();
            if(!$info){
               $this->error($upload->getError());
            }else{
                //遍历
                foreach($info as $key=>$file){
                   $path=$file['savepath'].$file['savename'];
                }
            }
            $data['pic']=$path;
            // dump($data);exit;
            //执行修改
            if($goods->where("id=$id")->save($data)){
             unlink('./Public/Uploads/'.$row['pic']);//删除图片
             $this->success('修改成功',U('goods/index'));
            }else{
                $this->error('修改失败');
            }
        }
    }
}