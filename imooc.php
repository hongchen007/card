<?php
	if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

	// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
	define('APP_DEBUG',True);
	//1定义项目的名称
	define('APP_NAME','Imooc');
	//2定义项目的路径
	define('APP_PATH','./Imooc/');
	//3引入tp的核心文件
	require('./ThinkPHP/ThinkPHP.php');