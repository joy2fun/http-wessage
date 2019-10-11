<?php

namespace App\Http\Controllers;

use EasyWeChat\Factory;
use Illuminate\Http\Request;

class WechatController extends Controller
{
    public function templateMessage(Request $request) {
        $config = [
            'app_id' => env('APP_ID'),
            'secret' => env('APP_SECRET'),
            'token' => env('APP_TOKEN'),
            'response_type' => 'array',
        ];
        $app = Factory::officialAccount($config);
        return $app->template_message->send([
            'touser' => $request->input('touser', env('TOUSER')),
            'template_id' => $request->input('template_id', env('TEMPLATE_ID')),
            'data' => $request->input('data'),
        ]);
    }
}
