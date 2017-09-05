<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
// Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'SIMSTAN Litbang',
	'theme' => 'litbang',
	'language'=>'id',
	'timeZone'=>'Asia/Jakarta',	

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.EExcelWriter.*', 
		'application.extensions.EPhpThumb.*',
		),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'admin',
			
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			// 'generatorPaths' => array('application.gii'),
			
			),
		
		),

	// application components
	'components'=>array(
		'user'=>array(
			//'class'=> 'WebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'class'=>'WebUser',
			'loginUrl'=>array('site/masuk'),
			),
		
		// 'bootstrap'=>array(
		// 	'class'=>'bootstrap.components.Bootstrap',
		// ),
		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:w+>/<id:d+>'=>'<controller>/view',
				'<controller:w+>/<action:w+>/<id:d+>'=>'<controller>/<action>',
				'<controller:w+>/<action:w+>'=>'<controller>/<action>',

				//Page URL Default Settings
				'login' => 'site/login',
				'logout' => 'site/logout',
				'dashboard' => 'site/dashboard',
				'index' => 'site/index', 
				'contact' => 'site/contact',

				 //Page
				'page' => 'page/list',
				'p/<url:[a-zA-Z0-9-]+>/'=>'page/detail',				
				'prodak/<url:[a-zA-Z0-9-]+>/'=>'product/detail',				
				'article/<url:[a-zA-Z0-9-]+>/'=>'article/post',				
				'kategori/<name:[a-zA-Z0-9-]+>/'=>'category/listproduct',				
				'terpopuler'=>'category/listproductpopular',				
				'terbaru'=>'category/listproductlastest',				
				'info/<name:[a-zA-Z0-9-]+>/'=>'category/listpost',				
				'tags/<name:[a-zA-Z0-9-]+>/'=>'category/tag',				
				),
			
			'showScriptName'=>false,
			'caseSensitive'=>false
				// 'urlSuffix'=>'.html',
			),

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=i_sni',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix'=>'ss_',
			'enableProfiling'=>true,
			'enableParamLogging'=>true,
			'schemaCachingDuration'=>1000
			),

		'phpThumb'=>array(
			'class'=>'ext.EPhpThumb.EPhpThumb',
			),	

		// 'db'=>array(
		// 	'connectionString' => 'mysql:host=localhost;dbname=sinerjit_sni',
		// 	'emulatePrepare' => true,
		// 	'username' => 'sinerjit_sni',
		// 	'password' => 'mlHkb#w98%J,',
		// 	'charset' => 'utf8',
		// 	),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
			),
		'log'      => array(
			'class'  => 'CLogRouter',
			'routes' => array(
            // file logging
				array(
					'class'   => 'CFileLogRoute',
					'logFile' => 'console.log',
					'levels'  => 'error, warning, info, trace',
					'enabled' => true,
					),
				),
			),

		),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		),
	);