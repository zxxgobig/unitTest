<?php 
require_once 'PHPUnit/Autoload.php';
require_once 'source.php';//��Ҫ���ǵĴ���
class php5TestCase  extends PHPUnit_Framework_TestCase
{
    function __construct(){
        $this->obj = new source();
    }
    function testAdd(){// ���Թ��ܵ�����������
         
        $Actual = $this->obj->add(1, 3);//ʵ�ʵĽ��
        $Expect = 4;//�����Ľ��
        $this->assertEquals($Expect, $Actual);
    }
}
?>