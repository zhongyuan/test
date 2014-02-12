<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'China OS',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'application.extensions.xml.*',
		'application.extensions.mailer.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

//		'gii'=>array(
//			'class'=>'system.gii.GiiModule',
//			'password'=>'1',
//			// If removed, Gii defaults to localhost only. Edit carefully to taste.
//			'ipFilters'=>array('127.0.0.1','::1'),
//		),

	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
        'cache' => array(
            'class' => 'CMemCache',
            'servers'=>array(
                array('host'=>'127.0.0.1', 'port'=>11211, 'weight'=>100),
            ),
        ),
		// uncomment the following to enable URLs in path-format
		'mailer' => array(
		      'class' => 'application.extensions.mailer.EMailer',
		      'pathViews' => 'application.views.email',
		      'pathLayouts' => 'application.views.email.layouts'
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
            'showScriptName'=>false,    // 这一步是将代码里链接的index.php隐藏掉。
			'rules'=>array(
//				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/*'=>'<controller>/<action>',
//				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
 				
			),
			'urlSuffix' =>'.html',
		),


		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=cos',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		//连接ReleaseManage数据库
		'dbrm'=>array(
			'class'=> 'CDbConnection',
			'connectionString' => 'mysql:host=localhost;dbname=releasemanage',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
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
                    'levels'=>'trace',     //级别为trace  
                    'categories'=>'system.db.*' //只显示关于数据库信息,包括数据库连接,数据库执行语句
				),
				*/
			),
		),
		'coreMessages'=>array(
			'basePath'=>'protected/messages'
        ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
        'cdnUrl' => array(),             //默认为空，调本地服务器 10.33.41.13 "http://cc.img.resource.china-cos.com/cos_web", 图片多的时候，可能分多个域名加载图片
        'cdnVersion' => '', //默认为空，当用到远程cdn时，需要及时更新，克服cdn缓存
		'appkey' => "906b7b19d5d24b568f67b56cffd33cfa",
        'max_version' => 15,//显示某种类型，最大的版本个数，与releasemanage里面一样。
        'document_root' => $_SERVER['DOCUMENT_ROOT'],
        'target_file' => $_SERVER['DOCUMENT_ROOT'].'/../../media',
 //       'target_file' => $_SERVER['DOCUMENT_ROOT'].'/../media', //liang的本地
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'emailHost' => 'ltexch02.china-liantong.com',
		'emailUser' => 'cos-devsupport@china-liantong.com',
		'emailPass' => 'Aa123456',
        'api' => array(//各种公共模块方法调用接口URL
            'getPassword' => "http://dev.doccms.com/index.php?r=site/getPassword",
            'ajaxCheckUser' => "http://dev.doccms.com/index.php?r=admin/ajaxCheckUser"
        )
	),
);
