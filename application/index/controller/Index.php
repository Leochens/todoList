<?php

namespace app\index\controller;
use \think\Controller;
use \think\Db;
use \think\Request;
class Index extends Controller
{
    
    public function index()
    {
        $res = Db::table('todos')->select();
        
        return json_encode($res);
    }
    public function login(){

    }
    public function addTodo()
    {
       if(!input('?get.content')||!input('?get.isCompleted'))//检测是否存在
       {
            return null;
       }
        $content = input('param.content');
        $flag = input('param.isCompleted');
        $data = ['content'=>$content, 'isCompleted'=>$flag];
        print_r($content);
        print_r($flag);       
        if(Db::table('todos')->insert($data))
        {
            return '添加成功';
        }else{
            return '添加失败';
        }
       
    }   
    public function delTodo(){

    }
    public function completeTodo(){

    }
}
