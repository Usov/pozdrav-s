<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Pozdrav-s Console Application',

	// preloading 'log' component
	'preload'=>array('log'),


    'import'=>array(
        'application.models.*',
        'application.components.*',
    ),
	// application components
	'components'=>array(

		// database settings are configured in database.php
        'db' => array(
            'class'=>'system.db.CDbConnection',
            'connectionString' => 'mysql:host=localhost;dbname=pozdrav-s',
            'username' => 'root',
            'password' => 'arahna1505',
            'charset' => 'utf8'
        ),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),

	),

    'params'=>array(
//        'voicecardJsonDataLoadUrl' => 'http://www.voicecards.ru/json/vsezaraz/voicecards.json'
        'voicecardJsonDataLoadUrl' => 'http://www.voicecards.ru/xml/vsezaraz/voicecards.xml'
    )
);
