<?php
include("conn.php"); // connect to database
class MyTest extends  PHPUnit_Framework_TestCase
{
	// test register database
	public function testRegister1() {    
		$user = 'admin';
		$password = 'password';
		// mysql_query returns an bool value to $result, indicating 0 or 1
		$result = mysql_query("insert into user(username,password)values('".$user."','".$password."');");
		$expect = 0; // expect the insert won't work, for it is already in the database
		$this->assertEquals($result, $expect);
    }

    // test register database
	public function testRegister2() {    
		$user = 'admin';
		$password = 'password';
		// mysql_query returns an bool value to $result, indicating 0 or 1
		$result = mysql_query("insert into user(username,password)values('".$user."','".$password."');");
		$expect = 1; // expect the insert won't work, for it is already in the database
		$this->assertEquals($result, $expect);
    }


    // test register database
	public function testRegister3() {    
		$user = 'sysu';
		$password = 'sser';
		// mysql_query returns an bool value to $result, indicating 0 or 1
		$result = mysql_query("insert into user(username,password)values('".$user."','".$password."');");
		$expect = 1; // expect the insert will work
		$this->assertEquals($result, $expect);
    }

    // test register database
	public function testRegister4() {    
		$user = 'sysu';
		$password = 'sser';
		// mysql_query returns an bool value to $result, indicating 0 or 1
		$result = mysql_query("insert into user(username,password)values('".$user."','".$password."');");
		$expect = 0; // expect the insert won't work, for it is already in the database
		$this->assertEquals($result, $expect);
    }

    // test register database
	public function testRegister5() {    
		$user = 'sysu';
		$password = 'sser';
		// mysql_query returns an bool value to $result, indicating 0 or 1
		$result = mysql_query("insert into user(username,password)values('".$user."','".$password."');");
		$expect = 1; // test it
		$this->assertEquals($result, $expect);
    }

}
?>