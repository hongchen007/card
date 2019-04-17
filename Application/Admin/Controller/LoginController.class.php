<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

    //加载登录页面
    public function index(){
    	
    	//加载模板
        $this->display();
    }

    //加载验证码
    public function verify(){
        //实例化验证码类
        $verify = new \Think\Verify();
        $verify->fontSize = 20;//验证码字体大小
        $verify->length   = 4;//验证码位数
        $verify->useNoise = false;//干扰点
        $verify->useCurve = false;//混淆曲线
        $verify->entry();//输出验证码，值保存在session里面
    }

    //执行登录
    public function dologin(){
        //实例化
        $user=M('user');
    	//验证验证码
    	$verify=new \Think\Verify();
        if(!$verify->check($_POST['code'],"")){
            $this->ajaxreturn(1);
            exit;
        }

        $name = $_POST['name'];
        $info=$user->where("name='{$name}' OR tel='{$name}'")->filter('strip_tags')->find();
        // dump($info);exit;
        $grade=11;

        if($info){
            if($info['login_pwd']==md5(I('post.pwd',0,'intval'))){
                if($info['grade'] == $grade){
                    //登录成功
                    session("info",$info);
                    $this->ajaxreturn(5);
                }else{
                    $this->ajaxreturn(4);
                }
            }else{
                $this->ajaxreturn(3);
                exit;
            }
        }else{
            $this->ajaxreturn(2);
            exit;
        }
    }


    //执行退出
    public function loginout(){
        session(null);
        $this->redirect('Login/index');
    }
    
}