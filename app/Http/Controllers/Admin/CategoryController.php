<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
/**
 * 这是通过命令生成的控制器,是不是很人性化，是不是感觉B格高了一级
 * 命名空间写好了,也use了，也extends了
 * 一个字 “爽”啊
 */
class CategoryController extends Controller
{
    //
    public function helloWorld()
    {
        return '/Admin/CategoryController/helloWorld';
    }

    public function showHtml()
    {
        return view('Admin/cateList');
    }

    public function getTest(Request $request,$id)
    {
        try{
            // 路由参数 id
            dump($id);
            // 获取请求参数所有数据
            dump($request->all());
            // 获取单个  和TP中的input()一样
            dump($request->input("rqnAME"));
            // 下面就是好玩的了 可以过去请求数据
            // 只接受某些参数
            dump($request->only("rqAge"));
            // 过滤掉某些参数
            dump($request->except(array('rqnAME','rqAge')));
        }catch(\Exception $e){
            dump($e->getMessage());
        }
    }
}
