<?php

namespace App\Http\Controllers;

use EasyWeChat\Factory;

class WxController extends Controller
{
    public function index()
    {

        $config = [
            'app_id' => 'wx52fb02ec749b00ff',
            'secret' => 'a2b0d84b886e9f1b063027d863b3d918',
            'response_type' => 'array',
            'log' => [
                'level' => 'debug',
                'file' => __DIR__ . '/wechat.log',
            ],
        ];

        $app = Factory::officialAccount($config);

        $response = $app->server->serve();

       // 将响应输出
        return $response;
    }
}
