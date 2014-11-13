<?php 
require_once('simpletest/autorun.php');
require_once('source.php');//需要测试的文件代码
class simpletestTestCase extends UnitTestCase{
	function __construct(){
		$this->obj = new source();//实例化要测试的文件类
	}
	 
	function testAdd(){// 测试功能的描述方法名
		 
		$Actual = $this->obj->add(1, 2);//实际的结果
		$Expect = 3;//期望的结果
		$this->assertEqual($Expect, $Actual);
	}
}


?>