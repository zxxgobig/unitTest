<?php 
require_once 'source.php'; //Ҫ���Ե��ļ��Ĵ���
class php4unitTestCase extends PHPUnit_TestCase {
    function setUp() {
         
        $this->obj = new source();
         
    }
    function tearDown() {
        unset ( $this->obj );
    }
     
    function testAdd(){ // ���Թ��ܵ�����������
        $Actual = $this->obj->add(1,1);
        $Expect = 2;//�����Ľ��
        $this->assertEquals($Expect, $Actual);
    }
}


?>