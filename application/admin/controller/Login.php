<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
class Login extends Controller
{
    public function index($name='')
    {
        return 'peleas login '.$name;
    }
}
?>