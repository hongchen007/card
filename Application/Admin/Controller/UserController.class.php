<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
class UserController extends AllowController {
    public function index(){
    	$weixin_user=M('weixin_user');
        //搜索条件
        $where1=array();
        if(!empty($_GET['name'])){
            $where1['weixin_name'] = array('like',"%{$_GET['name']}%");
        }
        if(!empty($_GET['id'])){
            $where1['id'] = $_GET['id'];
        }
        if(!empty($_GET['state'])){
            $where1['state'] = $_GET['state'];
        }
        $count = $weixin_user->where($where1)->count();
        $p = getpage($count,10);
        $info = $weixin_user->where($where1)->limit($p->firstRow, $p->listRows)->select();
        //加载模板
        $this->assign('info',$info);
        $this->assign('page', $p->show());
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
            array('wechat_name','require','用户微信不能为空'),
            array('wechat_name','','用户微信已经存在',0,'unique',1),
    		array('pid','require','上级ID不能为空'),
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

        //验证电话号码唯一性，有空
        $tel=I('post.tel','','strip_tags');
        if($tel){
            $telinfo=$user->field('tel')->select();
            $tel=array();
            foreach($telinfo as $ke=>$va){
                $tel[] = $va['tel'];
            }
            if(in_array($data['tel'],$tel)){
                $this->error('手机号已存在！');
            } 
        } 

        $data['name']=I('post.name','','strip_tags');
        $data['wechat_name']=I('post.wechat_name','','strip_tags');
        $data['pid']=I('post.pid','','strip_tags');
        $data['tel']=I('post.tel','','strip_tags');
        $data['address']=I('post.address','','strip_tags');
        $data['money']=I('post.money','','strip_tags');
        $data['login_pwd']=md5('123456');
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
        $weixin_user=M('weixin_user');
    	//接收值
    	$id = $_GET['id'];
        //查询数据
        $info=$weixin_user->where("id=$id")->find();
        // dump($info);exit;
    	//加载页面，分配数据
    	$this->assign('info',$info);
    	$this->display();
    }
    //执行修改
    public function doedit(){
        //实例化Model类
        $weixin_user = M('weixin_user');  
    	$rules=array(
    		array('name','require','用户名不能为空'),
    		array('tel','','电话号码已经存在',0,'unique',1),
    		array('money','/^\d*$/','金额必须为数字')
    	);
       	if (!$weixin_user->validate($rules)->create()){     
            // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $this->error($weixin_user->getError());
        }

        $data['name']=I('post.name','','strip_tags');
        $data['pid']=I('post.pid','','strip_tags');
        $data['tel']=I('post.tel','','strip_tags');
        $data['address']=I('post.address','','strip_tags');
        $data['money']=I('post.money','','strip_tags');
        $data['grade']=I('post.grade','','strip_tags');
        $id=I('post.id','','strip_tags');
   		// dump($data);exit; 

   		//验证唯一性
        $id=I('post.id','','strip_tags');
        $userinfo=$weixin_user->field('id,name,tel')->select();
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
        // dump($data);exit;
        //执行修改
        if($weixin_user->where("id=$id")->save($data)){
         unlink('./Public/Uploads/'.$row['head_pic']);//删除图片
         $this->success('修改成功',U('User/index'));
        }else{
            $this->error('修改失败');
        }
    }
//========================================优秀案例=======================================================
    public function good(){
        //实例化
        $case = M('case');
        $info = $case->find();

        // dump($info);exit;
        //加载模板
        $this->assign('info',$info);
        $this->display();
    }
    //添加页面
    public function goodadd(){
        //加载模板
        $this->display();
    }
    //执行添加
    public function goodinsert(){
        $case=M('case');
        $rules=array(
            array('content','require','内容不能为空'),
            array('title','require','标题不能为空')
        );
        if (!$case->validate($rules)->create()){     
            // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $this->error($case->getError());
        }
        $data['title']=I('post.title','','strip_tags');
        $data['content']=I('post.content','','strip_tags');
        $data['addtime']=date('Y-m-d H:i:s',time());
        //执行添加
        if($case->add($data)){
            $this->success('添加成功',U('User/good'));
        }else{
            $this->error('添加失败');
        }
    }
    //删除
    public function gooddel(){
     //实例化
     $case = M('case');
     //接收值
     $id = $_GET['id'];
     //删除数据库数据
     $info = $case->where("id=$id")->delete();
     //返回
        if($info){
            $this->success('删除成功', U('User/good'));
        } else {
            $this->error('删除失败');
        }
    }

    //加载修改页面
    public function goodedit(){
        //实例化
        $case=M('case');
        //接收值
        $id = $_GET['id'];
        //查询数据
        $info=$case->where("id=$id")->find();
        // dump($info);exit;
        //加载页面，分配数据
        $this->assign('info',$info);
        $this->display();
    }
    //执行修改
    public function gooddoedit(){
        //实例化
        $case=M('case');
        $rules=array(
            array('title','require','标题内容不能为空'),
            array('content','require','文章内容不能为空')
        );
        if (!$case->validate($rules)->create()){     
            // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $this->error($case->getError());
        }
        //接收值
        $data['id'] = $_POST['id'];
        $data['title']=I('post.title','','strip_tags');
        $data['content']=I('post.content','','strip_tags');
        // dump($data);exit;
        //更新
        if($case->save($data)){
            $this->success('修改成功',U('User/good'));
        }else{
            $this->error('修改失败');
        }
    }

//=============================================资金==================================================

    //提现记录
    public function tixian(){
        //实例化
        $recode = M('recode');
        //搜索条件
        $where1=array();
        if(!empty($_GET['id'])){
            $where1['user_id'] = $_GET['id'];
        }
        if(!empty($_GET['grade'])){
            $where1['grade'] = $_GET['grade'];
        }else{
            $where1['grade'] = array('in','1,2,3');
        }
        //查询数据
        $count = $recode->where($where1)->count();
        $p = getpage($count,10);
        $info = $recode->where($where1)->limit($p->firstRow,$p->listRows)->select();
        // dump($info);exit;
        //加载页面，分配数据
        $this->assign('info',$info);
        $this->assign('page', $p->show());
        $this->display();
    }

    //同意
    public function agree(){
        //实例化
        $recode = D('recode');
        //接收数据
        $where['id'] = $id = I('get.id','','strip_tags');
        //修改数据
        $data['grade'] = 2;
        if($recode->where($where)->save($data)){
            $this->success('操作成功',U('User/tixian'));
        }else{
            $this->error('操作失败');
        }
    }
    //拒接
    public function refuse(){
        //实例化
        $recode = D('recode');
        $weixin_user = D('weixin_user');
        //接收数据
        $where['id'] = $id = I('get.id','','strip_tags');
        //修改recode表数据
        $data['grade'] = 3;
        $info1 = $recode->where($where)->save($data);
        //修改weixin_user表数据
        $recodeinfo = $recode->where($hwere)->field('user_id,money')->find();
        $map['id'] = $recodeinfo['user_id'];
        $userinfo = $weixin_user->where($map)->field('money')->find();
        $date['money'] = $recodeinfo['money'] + $userinfo['money'];
        $info2 = $weixin_user->where($map)->save($date);
        if($info1 && $info2){
            $this->success('操作成功',U('User/tixian'));
        }else{
            $this->error('操作失败');
        }
    }

    //付款记录
    public function payment(){
        //实例化
        $user = M('weixin_user');
        $order = M('order');
        $goods = M('goods');
        //搜索条件
        $where1=array();
        if(!empty($_GET['name'])){
            $where2['weixin_name'] = $_GET['name'];
            $id = $user->where($where2)->field('id')->find();
            $where1['user_id'] =$id;
        }

        //查询数据
        $orderinfo = $order->order('addtime desc')->select();
        foreach($orderinfo as $k=>$v){
            $where['id'] = $v['goods_id'];
            $map['id']   = $v['user_id'];
            $goodsinfo[$k] = $goods->where($where)->field('name')->find();
            $userinfo[$k]  = $user->where($map)->field('weixin_name')->find();
            $orderinfo[$k]['goods_name']  = $goodsinfo[$k]['name'];
            $orderinfo[$k]['weixin_name'] = $userinfo[$k]['weixin_name'];
        }
        //总长
        $Total = count($orderinfo);
        //导入分页类
        $Page = new Page($Total,10);
        //分页设置
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('first','首页');
        $Page->setConfig('last','末页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        $orderinfo=array_slice($orderinfo,$Page->firstRow,$Page->listRows);
        // dump($orderinfo);exit;
        $Page = $Page->show();
        $this->assign('Page',$Page);
        $this->assign('info',$orderinfo);
        //加载模板
        $this->display();
    }
    //客服列表
    public function service(){
        //实例化
        $about = M('about');
        //查询数据
        $count = $about->count();
        $p = getpage($count,10);
        $info = $about->limit($p->firstRow, $p->listRows)->select();
        //加载模板
        $this->assign('info',$info);
        $this->assign('page', $p->show());
        $this->display();
    }
    //添加客服页面
    public function addservice(){
        $this->display();
    }
    //执行添加客服
    public function doaddser(){
        //实例化
        $about = M('about');
        $rules=array(
            array('weixin','require','客服微信不能为空'),
            array('weixin','','客服微信已经存在',0,'unique',1)
        );
        if (!$about->validate($rules)->create()){     
            // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $this->error($about->getError());
        }
        $data['weixin']=I('post.weixin','','strip_tags');
        if($about->add($data)){
            $this->success('添加成功',U('User/service'));
        }else{
            $this->error('添加失败');
        }
    }
    //删除客服
    public function delservice(){
        //实例化
        $about = M('about');
        //接收值
        $id = $_GET['id'];
        //删除数据库数据
        $info = $about->where("id=$id")->delete();
        //返回
        if($info){
            $this->success('删除成功', U('User/service'));
        } else {
            $this->error('删除失败');
        }
    }
    //加载修改页面
    public function editservice(){
        //实例化
        $about = M('about');
        //接收值
        $id = $_GET['id'];
        //查询数据
        $info=$about->where("id=$id")->find();
        // dump($info);exit;
        //加载页面，分配数据
        $this->assign('info',$info);
        $this->display();
    }
    //执行修改
    public function doeditser(){
        //实例化Model类
        $about = M('about');
        $rules=array(
            array('weixin','require','用户名不能为空'),
        );
        if (!$about->validate($rules)->create()){     
            // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $this->error($about->getError());
        }

        $data['weixin']=I('post.weixin','','strip_tags');
        // dump($data);exit; 

        //验证唯一性
        $where['id'] = $id=I('post.id','','strip_tags');
        $userinfo=$about->field('id,weixin')->select();
        // dump($id);
        // dump($userinfo);exit;
        //排除自己信息的其他信息
        foreach($userinfo as $k=>$v){
            if($v['id'] == $id){
                unset($userinfo[$k]);
            }
        }
        $weixin=array();
        foreach($userinfo as $ke=>$va){
            $weixin[] = $va['weixin'];
        }
        if(in_array($data['weixin'],$weixin)){
            $this->error('客服微信已存在！');
        } 
        // dump($data);exit;
        //执行修改
        if($about->where($where)->save($data)){
            $this->success('修改成功',U('User/service'));
        }else{
            $this->error('修改失败');
        }
    }
}