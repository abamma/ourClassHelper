<?php
include("conn.php"); // connect to database
class MyTest extends  PHPUnit_Framework_TestCase
{
	// log in normally
    public function testLogin1() {    
		$user = 'admin';
		$password = 'password';
		$result = mysql_query("select username from user where username = '".$user."'and password = '".$password."';");
		$result = mysql_result($result,0,0);
		$expect = 'admin';
		$this->assertEquals($expect, $result); // expect successful login
    }

    // log in normally
    public function testLogin2() {    
		$user = 'student1';
		$password = 'password';
		$result = mysql_query("select username from user where username = '".$user."'and password = '".$password."';");
		$result = mysql_result($result,0,0);
		$expect = 'student1';
		$this->assertEquals($expect, $result); // expect successful login
    }

    // log in normally
    public function testLogin3() {    
		$user = 'student2';
		$password = 'password';
		$result = mysql_query("select username from user where username = '".$user."'and password = '".$password."';");
		$result = mysql_result($result,0,0);
		$expect = 'student2';
		$this->assertEquals($expect, $result); // expect successful login
    }

    // log in abnormally
    public function testLogin4() {    
		$user = 'admin';
		$password = 'password1';
		$result = mysql_query("select username from user where username = '".$user."'and password = '".$password."';");
		$result = mysql_result($result,0,0);
		$expect = 'admin';
		$this->assertEquals($expect, $result); // expect unsuccessful login, it should fail
    }

    // log in abnormally
    public function testLogin5() {    
		$user = 'admin1';
		$password = 'password';
		$result = mysql_query("select username from user where username = '".$user."'and password = '".$password."';");
		$result = mysql_result($result,0,0);
		$expect = 'admin1';
		$this->assertEquals($expect, $result); // expect unsuccessful login, it should fail
    }

    // log in abnormally
    public function testLogin6() {    
		$user = 'admin1';
		$password = 'password1';
		$result = mysql_query("select username from user where username = '".$user."'and password = '".$password."';");
		$result = mysql_result($result,0,0);
		$expect = 'admin1';
		$this->assertEquals($expect, $result); // expect unsuccessful login, it should fail
    }
	
	//注入式攻击
	public function testLogin7() {    
		$user = 'admin';
		$password = 'password';
		$result = mysql_query("select username from user where username = '".$user."'or 1 = 1 and password = '".$password."';");
		$result = mysql_result($result,0,0);
		$expect= 'student1';
		$this->assertEquals($result, $expect);
    }

	// // 注入式攻击
 //    public function testLogin7() {    
	// 	$user = "'-"#";
	// 	$password = "'-"#";
	// 	$result = mysql_query("select username from user where username = '".$user."'and password = '".$password."';");
	// 	$result = mysql_result($result,0,0);
	// 	$expect = ''-"#';
	// 	$this->assertEquals($expect, $result); // expect unsuccessful login, it should fail
 //    }


}
?>