<?php
/**
 * 系统配置
 * @Author		HeJun(hejun@hejun.biz)
 * @Link		www.hejun.biz
 * @License		http://www.hejun.biz/license
 * @Version		v1.0
 */
return array(
	//开启调试模式
	//'enableProfiling'=>YII_DEBUG,
	//'enableParamLogging'=>YII_DEBUG,
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=> '锐意翱翔',
	'language'=>'zh_cn',
	'theme'=>'default',
	'timeZone'=>'Asia/Shanghai',
	//自动载入
	'import'=>array(
		'application.components.*',
	),
	//系统模块
	'modules'=>array(
		'admin'=>array(
			'class'=>'application.modules.admin.AdminModule',
		),
	),
	'components'=>array(
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=dev',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => 'tb_',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'caseSensitive'=>false,	//设置url大小写不敏感
			'urlSuffix'=>'.html',	//设置url后缀
			'showScriptName'=>false,//隐藏index.php
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),
);
?>