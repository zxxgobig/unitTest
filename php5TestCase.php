<?php 
require_once 'PHPUnit/Autoload.php';
require_once 'source.php';//需要测是的代码
class php5TestCase  extends PHPUnit_Framework_TestCase
{
    function __construct(){
        $this->obj = new source();
    }
    function testAdd(){// 测试功能的描述方法名
         
        $Actual = $this->obj->add(1, 3);//实际的结果
        $Expect = 4;//期望的结果
        $this->assertEquals($Expect, $Actual);
    }
}
?>