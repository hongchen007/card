<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends AllowController {

//===========================================================信用卡知识文章================================================================
    //加载首页
    public function cardindex(){
        $article_card=M('article_card');
        $info=$article_card->find();

        //加载模板
        $this->assign('info',$info);
        $this->display();
    }
    //添加页面
    public function cardadd(){
        //加载模板
        $this->display();
    }
    //执行添加
    public function cardinsert(){
        $article_card=M('article_card');
        $rules=array(
            array('content','require','文章内容不能为空')
        );
        if (!$article_card->validate($rules)->create()){     
            // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $this->error($article_card->getError());
        }
        $data['content']=I('post.content','','strip_tags');
        $data['addtime']=date('Y-m-d H:i:s',time());
        //执行添加
        if($article_card->add($data)){
            $this->success('添加成功',U('Article/cardindex'));
        }else{
            $this->error('添加失败');
        }
    }
    //禁用
    public function cardstop(){
        //实例化
        $article_card=M('article_card');
        //接受值
        $data['id'] = $_GET['id'];
        $data['classes'] = 2;
        // dump($data);exit;
        //更新
        if($article_card->save($data)){
            $this->success('禁用成功',U('Article/cardindex'));
        }else{
            $this->error('禁用失败');
        }
    }
    //启用
    public function cardstart(){
        //实例化
        $article_card=M('article_card');
        //接受值
        $data['id'] = $_GET['id'];
        $data['classes'] = 1;
        // dump($data);exit;
        //更新
        if($article_card->save($data)){
            $this->success('启用成功',U('Article/cardindex'));
        }else{
            $this->error('启用失败');
        }
    }
    //加载修改页面
    public function cardedit(){
        //实例化
        $article_card=M('article_card');
        //接收值
        $id = $_GET['id'];
        //查询数据
        $info=$article_card->where("id=$id")->find();
        // dump($info);exit;
        //加载页面，分配数据
        $this->assign('info',$info);
        $this->display();
    }
    //执行修改
    public function carddoedit(){
        //实例化
        $article_card=M('article_card');
        $rules=array(
            array('content','require','文章内容不能为空')
        );
        if (!$article_card->validate($rules)->create()){     
            // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $this->error($article_card->getError());
        }
        //接收值
        $data['id'] = $_POST['id'];
        $data['content']=I('post.content','','strip_tags');
        // dump($data);exit;
        //更新
        if($article_card->save($data)){
            $this->success('修改成功',U('Article/cardindex'));
        }else{
            $this->error('修改失败');
        }
    }



//===========================================================金融理财知识文章================================================================
   


    //加载首页
    public function finindex(){
        $article_fin=M('article_fin');
        $info=$article_fin->find();

        //加载模板
        $this->assign('info',$info);
        $this->display();
    }
    //添加页面
    public function finadd(){
        //加载模板
        $this->display();
    }
    //执行添加
    public function fininsert(){
        $article_fin=M('article_fin');
        $rules=array(
            array('content','require','文章内容不能为空')
        );
        if (!$article_fin->validate($rules)->create()){     
            // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $this->error($article_fin->getError());
        }
        $data['content']=I('post.content','','strip_tags');
        $data['addtime']=date('Y-m-d H:i:s',time());
        //执行添加
        if($article_fin->add($data)){
            $this->success('添加成功',U('Article/finindex'));
        }else{
            $this->error('添加失败');
        }
    }
    //禁用
    public function finstop(){
        //实例化
        $article_fin=M('article_fin');
        //接受值
        $data['id'] = $_GET['id'];
        $data['classes'] = 2;
        // dump($data);exit;
        //更新
        if($article_fin->save($data)){
            $this->success('禁用成功',U('Article/finindex'));
        }else{
            $this->error('禁用失败');
        }
    }
    //启用
    public function finstart(){
        //实例化
        $article_fin=M('article_fin');
        //接受值
        $data['id'] = $_GET['id'];
        $data['classes'] = 1;
        // dump($data);exit;
        //更新
        if($article_fin->save($data)){
            $this->success('启用成功',U('Article/finindex'));
        }else{
            $this->error('启用失败');
        }
    }
    //加载修改页面
    public function finedit(){
        //实例化
        $article_fin=M('article_fin');
        //接收值
        $id = $_GET['id'];
        //查询数据
        $info=$article_fin->where("id=$id")->find();
        // dump($info);exit;
        //加载页面，分配数据
        $this->assign('info',$info);
        $this->display();
    }
    //执行修改
    public function findoedit(){
        //实例化
        $article_fin=M('article_fin');
        $rules=array(
            array('content','require','文章内容不能为空')
        );
        if (!$article_fin->validate($rules)->create()){     
            // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $this->error($article_fin->getError());
        }
        //接收值
        $data['id'] = $_POST['id'];
        $data['content']=I('post.content','','strip_tags');
        // dump($data);exit;
        //更新
        if($article_fin->save($data)){
            $this->success('修改成功',U('Article/finindex'));
        }else{
            $this->error('修改失败');
        }
    }


//===========================================================推广须知文章================================================================
   


    //加载首页
    public function generaindex(){
        $article_genera=M('article_genera');
        $info=$article_genera->find();

        //加载模板
        $this->assign('info',$info);
        $this->display();
    }
    //添加页面
    public function generaadd(){
        //加载模板
        $this->display();
    }
    //执行添加
    public function generainsert(){
        $article_genera=M('article_genera');
        $rules=array(
            array('content','require','文章内容不能为空')
        );
        if (!$article_genera->validate($rules)->create()){     
            // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $this->error($article_genera->getError());
        }
        $data['content']=I('post.content','','strip_tags');
        $data['addtime']=date('Y-m-d H:i:s',time());
        //执行添加
        if($article_genera->add($data)){
            $this->success('添加成功',U('Article/generaindex'));
        }else{
            $this->error('添加失败');
        }
    }
    //禁用
    public function generastop(){
        //实例化
        $article_genera=M('article_genera');
        //接受值
        $data['id'] = $_GET['id'];
        $data['classes'] = 2;
        // dump($data);exit;
        //更新
        if($article_genera->save($data)){
            $this->success('禁用成功',U('Article/generaindex'));
        }else{
            $this->error('禁用失败');
        }
    }
    //启用
    public function generastart(){
        //实例化
        $article_genera=M('article_genera');
        //接受值
        $data['id'] = $_GET['id'];
        $data['classes'] = 1;
        // dump($data);exit;
        //更新
        if($article_genera->save($data)){
            $this->success('启用成功',U('Article/generaindex'));
        }else{
            $this->error('启用失败');
        }
    }
    //加载修改页面
    public function generaedit(){
        //实例化
        $article_genera=M('article_genera');
        //接收值
        $id = $_GET['id'];
        //查询数据
        $info=$article_genera->where("id=$id")->find();
        // dump($info);exit;
        //加载页面，分配数据
        $this->assign('info',$info);
        $this->display();
    }
    //执行修改
    public function generadoedit(){
        //实例化
        $article_genera=M('article_genera');
        $rules=array(
            array('content','require','文章内容不能为空')
        );
        if (!$article_genera->validate($rules)->create()){     
            // 如果创建失败 表示验证没有通过 输出错误提示信息     
            $this->error($article_genera->getError());
        }
        //接收值
        $data['id'] = $_POST['id'];
        $data['content']=I('post.content','','strip_tags');
        // dump($data);exit;
        //更新
        if($article_genera->save($data)){
            $this->success('修改成功',U('Article/generaindex'));
        }else{
            $this->error('修改失败');
        }
    }
}