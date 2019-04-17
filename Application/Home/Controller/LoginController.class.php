<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {

	//加载注册页面
    public function index(){
    	$openid = $_GET['openid'];
    	$this->assign('openid',$openid);
        $this->display();
    }
    //执行注册
    public function doadd(){
        //实例化
        $user = M('user');
        //接收数据
        $data['name'] = $_POST['name'];
        $data['chat_name'] = $_POST['chat_name'];
        $data['tel'] = $_POST['tel'];
        $data['address'] = $_POST['address'];
        $data['grade'] = $_POST['grade'];
        dump($data);exit;

    }
}