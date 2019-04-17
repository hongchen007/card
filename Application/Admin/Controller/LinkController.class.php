<?php
namespace Admin\Controller;
use Think\Controller;
class LinkController extends AllowController {
    //加载商品列表页
    public function index(){
        //实例化
        $link=M('link');
        //搜索条件
        $where1=array();
        if(!empty($_GET['bank_name'])){
            $where1['bank_name'] = array('like',"%{$_GET['bank_name']}%");
        }
        $count = $link->where($where1)->count();
        $p = getpage($count,10);
        $info = $link->where($where1)->limit($p->firstRow, $p->listRows)->select();
        //加载模板
        $this->assign('info',$info);
        $this->assign('page', $p->show());
        $this->display();
    }
    //添加商品页面
    public function add(){
    	//加载模板
    	$this->display();
    }
    //执行添加
    public function insert(){
        //实例化
    	$link=M('link');
    	$rules=array(
            array('bank_name','require','链接名不能为空'),
            array('bank_name','','链接名称已经存在！',0,'unique',1), 
            array('src','require','链接地址不能为空'),
            array('src','','链接地址已经存在！',0,'unique',1)
        );
        if (!$link->validate($rules)->create()){    
            // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $this->error($link->getError());
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
        $data['bank_name']=I('post.bank_name','','strip_tags');
        $data['src']=I('post.src','','strip_tags');
        $data['addtime']=date('Y-m-d H:i:s',time());
        $data['pic']=$path;

        // dump($data);exit;
        if($link->add($data)){
        	$this->success('添加成功',U('link/index'));
        }else{
        	$this->error('添加失败');
        }
    }
    //删除链接
    public function del(){
    	//实例化
    	$link = M('link');
    	//接收值
    	$id = $_GET['id'];
    	//删除数据库数据
        $row = $link->where("id=$id")->find(); 
    	$info = $link->where("id=$id")->delete();
    	//返回
		if($info){
		    $this->success('删除成功', U('link/index'));
            unlink('./Public/Uploads/'.$row['pic']);//删除图片
		} else {
		    $this->error('删除失败');
		}
    }
    //加载修改链接页面
    public function edit(){
        //实例化
        $link=M('link');
    	//接收值
    	$id = $_GET['id'];
        //查询数据
        $info=$link->where("id=$id")->find();
        // dump($userinfo);exit;
    	//加载页面，分配数据
    	$this->assign('info',$info);
    	$this->display();
    }
    //执行修改
    public function doedit(){
        //实例化Model类
        $link = M('link'); 

    	$rules=array(
    		array('bank_name','require','银行链接名称不能为空'),
            array('src','require','银行链接地址不能为空')
    	);
       	if (!$link->validate($rules)->create()){     
            // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $this->error($link->getError());
        }

        $data['bank_name']=I('post.bank_name','','strip_tags');
        $data['id']=I('post.id','','strip_tags');
        $data['src']=I('post.src','','strip_tags');
        $id=I('post.id','','strip_tags');
        $pic=I('post.xgpic','','strip_tags');
        $row=$link->find($id);

        //验证唯一性
        $userinfo=$link->field('id,bank_name,src')->select();
        //排除自己信息的其他信息
        foreach($userinfo as $k=>$v){
            if($v['id'] == $id){
                unset($userinfo[$k]);
            }
        }
        $bank_name=array();
        $src=array();
        foreach($userinfo as $ke=>$va){
            $link_name[] = $va['link_name'];
            $src[] = $va['src'];
        }
        if(in_array($data['bank_name'],$bank_name)){
            $this->error('链接名已存在！');
        }
        if(in_array($data['src'],$src)){
            $this->error('链接地址已存在！');
        }

   		// dump($data);exit; 	
        //判断是否修改头像
        if($pic == null){
            //执行修改
            if($link->where("id=$id")->save($data)){
                $this->success('修改成功',U('link/index'));
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
            if($link->where("id=$id")->save($data)){
             unlink('./Public/Uploads/'.$row['pic']);//删除图片
             $this->success('修改成功',U('link/index'));
            }else{
                $this->error('修改失败');
            }
        }
    }
}