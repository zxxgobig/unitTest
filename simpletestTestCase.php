<?php 
require_once('simpletest/autorun.php');
require_once('source.php');//��Ҫ���Ե��ļ�����
class simpletestTestCase extends UnitTestCase{
	function __construct(){
		$this->obj = new source();//ʵ����Ҫ���Ե��ļ���
	}
	 
	function testAdd(){// ���Թ��ܵ�����������
		 
		$Actual = $this->obj->add(1, 2);//ʵ�ʵĽ��
		$Expect = 3;//�����Ľ��
		$this->assertEqual($Expect, $Actual);
	}
}


?>