<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language'=>'zh-CN',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'redis'=>[
            'class' => 'yii\redis\Connection',

            'hostname' => 'localhost',  //你的redis地址

            'port' => 6379, //端口

            'password'=>'12345678',

            'database' => 0,

        ],
        'amqp' => [
            'class' => 'webtoucher\amqp\components\Amqp',
            'host' => '127.0.0.1',
            'port' => 5672,
            'user' => 'guest',
            'password' => 'guest',
            'vhost' => '/',
        ],

    ],
     'controllerMap' => [
        'rabbit' => [
            'class' => 'webtoucher\amqp\controllers\AmqpListenerController',
            'interpreters' => [
                'test' => 'app\components\RabbitInterpreter', // interpreters for each exchange
            ],
            'exchange' => 'test', // default exchange
        ],    
    ],
];
