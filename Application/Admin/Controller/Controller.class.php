<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends AllowController {
    public function index(){
    	$user=M('user');
    	$info=$user->select();

        //加载模板
        $this->assign('info',$info);
        $this->display();
    }
    //添加用户页面
    public function add(){
    	//加载模板
    	$this->display();
    }
    //执行添加
    public function insert(){
    	$user=M('user');
    	$rules=array(
    		array('name','require','用户名不能为空'),
    		array('name','','用户名已经存在',0,'unique',1),
    		array('pid','require','上级ID不能为空'),
    		array('tel','','电话号码已经存在',0,'unique',1),
    		array('money','/^\d*$/','金额必须为数字')
    	);
       	if (!$user->validate($rules)->create()){     
            // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $this->error($user->getError());
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
            
        }else{
            //遍历
            foreach($info as $key=>$file){
                $path=$file['savepath'].$file['savename'];
            }
        }
        $data['name']=I('post.name','','strip_tags');
        $data['pid']=I('post.pid','','strip_tags');
        $data['tel']=I('post.tel','','strip_tags');
        $data['address']=I('post.address','','strip_tags');
        $data['money']=I('post.money','','strip_tags');
        $data['login_pwd']=md5('123456');
        $data['grade']=11;
        $data['state']=1;
        $data['atten_time']=date('Y-m-d H:i:s',time());
        $data['head_pic']=$path;
        // dump($data);exit;
        if($user->add($data)){
        	$this->success('添加成功',U('User/index'));
        }else{
        	$this->error('添加失败');
        }
    }
  //   //删除用户
  //   public function del(){
  //   	//实例化
  //   	$User = M('user');
  //   	//接收值
  //   	$id = $_GET['id'];
  //   	//删除数据库数据
  //   	$info = $User->where("id=$id")->delete();
  //   	//返回
		// if($info){
		//     $this->success('删除成功', U('User/index'));
		// } else {
		//     $this->error('删除失败');
		// }
  //   }
    //冻结账户
    public function stop(){
        //实例化
        $user=M('user');
        //接受值
        $data['id'] = $_GET['id'];
        $data['state'] = 2;
        //更新
        if($user->save($data)){
            $this->success('冻结成功',U('User/index'));
        }else{
            $this->error('冻结失败');
        }
    }
    //恢复账户
    public function start(){
        //实例化
        $user=M('user');
        //接受值
        $data['id'] = $_GET['id'];
        $data['state'] = 1;
        //更新
        if($user->save($data)){
            $this->success('恢复成功',U('User/index'));
        }else{
            $this->error('恢复失败');
        }
    }
    //加载修改用户页面
    public function edit(){
        //实例化
        $user=M('user');
    	//接收值
    	$id = $_GET['id'];
        //查询数据
        $info=$user->where("id=$id")->find();
    	//加载页面，分配数据
    	$this->assign('info',$info);
    	$this->display();
    }
    //执行修改
    public function doedit(){
        //实例化Model类
        $user = M('user');  
    	$rules=array(
    		array('name','require','用户名不能为空'),
    		array('name','','用户名已经存在',0,'unique',1),
    		array('pid','require','上级ID不能为空'),
    		array('tel','','电话号码已经存在',0,'unique',1),
    		array('money','/^\d*$/','金额必须为数字')
    	);
       	if (!$user->validate($rules)->create()){     
            // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $this->error($user->getError());
        }

        $data['name']=I('post.name','','strip_tags');
        $data['pid']=I('post.pid','','strip_tags');
        $data['tel']=I('post.tel','','strip_tags');
        $data['address']=I('post.address','','strip_tags');
        $data['money']=I('post.money','','strip_tags');
        $id=I('post.id','','strip_tags');
        $pwd=I('post.pwd','','strip_tags');
        $pic=I('post.xgpic','','strip_tags');
        $row=$user->find($id);
        if($pwd == 2){
        	$data['pwd']=md5('123456');
        }
   		// dump($data);exit; 

   		//验证唯一性
        $id=I('post.id','','strip_tags');
        $userinfo=$user->field('id,name,tel')->select();
        //排除自己信息的其他信息
        foreach($userinfo as $k=>$v){
            if($v['id'] == $id){
                unset($userinfo[$k]);
            }
        }
        $name=array();
        $tel=array();
        foreach($userinfo as $ke=>$va){
            $name[] = $va['name'];
            $tel[] = $va['tel'];
        }
        if(in_array($data['name'],$name)){
            $this->error('用户名已存在！');
        }
        if(in_array($data['tel'],$tel)){
            $this->error('手机号已存在！');
        }	
        //判断是否修改头像
        if($pic == null){
            //执行修改
            if($user->where("id=$id")->save($data)){
                $this->success('修改成功',U('User/index'));
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
            $data['head_pic']=$path;
            // dump($data);exit;
            //执行修改
            if($user->where("id=$id")->save($data)){
             unlink('./Public/Uploads/'.$row['head_pic']);//删除图片
             $this->success('修改成功',U('User/index'));
            }else{
                $this->error('修改失败');
            }
        }
    }
}