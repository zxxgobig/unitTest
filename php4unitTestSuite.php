<?php 
require_once 'PHPUnit/PHPUnit.php';
require_once 'php4unitTestCase.php'; //TestCase �ļ�
$s->addTestSuite("php4unitTestCase");
$r = PHPUnit::run($s);
echo $r->toString();


?>