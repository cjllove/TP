<?php
require('base.php');
class cat extends p{
public function msound()
{
    print('miao');
}
}
class dog extends p{
    public function msound()
    {
        print('bar');
    }
}
function checksound($obj)
{
    if($obj instanceof p)
    {
        $obj->msound();
    }
    else
    {
        print('you are zhu');
    }
}
class dj{
    public static $handel;
    public static function djf()
    {
           if(empty(self::$handel))
           {
               self::$handel=new dj();
               return self::$handel;
           }
    }
    public function LG(){
        print('write');
    }
    private function _CONSTRUCT(){}
    private function _CLONE(){}
   
}
checksound(new dj());
$obj=new dj();
$obj->djf()->LG();
?>