<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
class Index2 extends Controller
{
    public function index($name='')
    {
        return 'zz'.$name;
    }
}
?>