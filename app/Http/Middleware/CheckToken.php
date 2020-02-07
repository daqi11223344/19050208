<?php

namespace App\Http\Middleware;

use Closure;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // 鉴权，验证token是否有效

        //获取用户标识
        $id = $_SERVER['HTTP_UID'];
        $token = $_SERVER['HTTP_TOKEN'];

        //请求passport 实现鉴权
        $client = new Client();
        $response = $client->request('POST', 'http://api.1905.com/auth', [
            'form_params' => [
                'id' => $id,
                'token' => $token,
            ]
        ]);

        //接收请求响应
        $response_data = $response->getBody();
        $arr = json_decode($response_data,true);

        //判断鉴权是否成功
        if($arr['errno']>0){        //鉴权失败
            echo "鉴权失败";die;
        }
        return $next($request);
    }
}
