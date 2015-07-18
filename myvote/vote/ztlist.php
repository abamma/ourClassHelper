<?php

require_once("conn.php");
require_once(root_dir."/smarty/smarty_inc.php");
$id=isset($_GET["id"]);
$act=isset($_GET["act"]);

//删除
if($act=="del")
  {
	  if($id)
	  {
		  if(mysql_query("delete from tp_zt where id=".$_GET["id"]))
		  {
			  echo("<script>alert('删除成功！');window.location='ztlist.php';</script>");
		  }
		  else
		  {
		  		echo("<script>alert('标题不能为空！');history.back();</script>");
		  }
	  }
  }
 
  //读数据
  $rows;
  $result =mysql_query("select * from tp_zt",$conn);
  if($result)
  {
	  while($row=mysql_fetch_array($result))
	  {
	 	$rows[]=$row;
	  }
  }
  $smarty->assign("rows",$rows);
  $smarty->display("ztlist.html");
  ?>