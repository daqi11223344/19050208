<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CommonModel;

class UserController extends Controller
{
    public function form()
    {
        return view('index.form');
    } 
    public function logins()
    {
        return view('index.login');
    }
    public function login2()
    {
        return view('index.logins');
    }
    
    public function login3()
    {
        return view('index.logind');
    }
    public function token1()
    {
        return view('index.token');
    }
    
    public function index()
    {
        /**
         *  注册
         */
        $url = "http://user.wangzhimo.top/user";
        $data = request()->except('_token');
        //初始化
        $ch = curl_init();
        //设置参数
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        //发起请求
        curl_exec($ch);
        //关闭回话
        curl_close($ch);
 
 
    }
 
 
    /**
     * 登录
     * Undocumented function
     *
     * @return void
     */
    public function index2()
    {
        $url = "http://user.wangzhimo.top/passport";
        $data = request()->except('_token');
        //初始化
        $ch = curl_init();
        //设置参数
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        //发起请求
        curl_exec($ch);
        //关闭回话
        curl_close($ch);
 
 
    }
 
 
  public function index5()
    {
        $url = "http://user.wangzhimo.top/passports";
        $data = request()->except('_token');
        //初始化
        $ch = curl_init();
        //设置参数
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        //发起请求
        curl_exec($ch);
        //关闭回话
        curl_close($ch);
 
 
    }
 
 
    public function index6()
    {
        $url = "http://user.wangzhimo.top/passportd";
        $data = request()->except('_token');
        //初始化
        $ch = curl_init();
        //设置参数
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        //发起请求
        curl_exec($ch);
        //关闭回话
        curl_close($ch);
 
 
    }
 
 
    public function index3()
    {
 
 
         $url = "http://user.wangzhimo.top/token";
         $name = request()->input('name');
         $token = request()->input('token');
         $data = [
             'token:'.$token,
             'name:'.$name
         ];
       
         //初始化
        $ch = curl_init();
        //设置参数
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_HTTPHEADER,$data);
        //发起请求
        curl_exec($ch);
        //关闭回话
        curl_close($ch);
    }
}
