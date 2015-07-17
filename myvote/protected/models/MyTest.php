<?php

class MyTest extends  CTestCase
{
    public function testEquality() {        
		$a = new TpWt();
		$b = $a->tableName();
		$yell = 'tp_wt';
		 $this->assertEquals($a, $yell);
    }
}
?>