<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
class Login extends Controller
{
    public function index($name='')
    {
       // return 'peleas login '.$name;
        print_r($this->request->param());
        $data=Db::name('sys_function')->find();
        print_r($data);
    }
}
?>