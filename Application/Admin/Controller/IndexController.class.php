<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends AllowController {
    public function index(){
    	$a = date("w");
    	if($a == 0){
    		$week = "星期日";
    	}
    	if($a == 1){
    		$week = "星期一";
    	}
    	if($a == 2){
    		$week = "星期二";
    	}
    	if($a == 3){
    		$week = "星期三";
    	}
    	if($a == 4){
    		$week = "星期四";
    	}
    	if($a == 5){
    		$week = "星期五";
    	}
    	if($a == 6){
    		$week = "星期六";
    	}
        // dump($week);exit;
        //加载模板
        $this->assign("week","$week");
        $this->display();
    }
}