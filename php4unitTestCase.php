<?php 
require_once 'source.php'; //要测试的文件的代码
class php4unitTestCase extends PHPUnit_TestCase {
    function setUp() {
         
        $this->obj = new source();
         
    }
    function tearDown() {
        unset ( $this->obj );
    }
     
    function testAdd(){ // 测试功能的描述方法名
        $Actual = $this->obj->add(1,1);
        $Expect = 2;//期望的结果
        $this->assertEquals($Expect, $Actual);
    }
}


?>