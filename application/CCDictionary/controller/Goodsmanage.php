<?php
namespace app\CCDictionary\controller;
use think\Controller;
use think\Db;
use think\Request;
class Goodsmanage extends controller{
    function index (){
       // print_r('wtf?');
      return  $this->fetch();
    }
}
?>