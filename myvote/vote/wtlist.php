<?php

include("conn.php");
require_once(root_dir."/smarty/smarty_inc.php");
$ztid=$_GET["ztid"];
$act=isset($_GET["act"]);
$wtid=isset($_GET["id"]);
$smarty->assign("ztid",$ztid);
//删除

if($act=="del")
  {
	  if($wtid)
	  {
		  if(mysql_query("delete from tp_wt where id=".$wtid))
		  {
			  mysql_query("delete from tp_xx where wtid=".$wtid);
			  echo("<script>alert('删除成功！');window.location='wtlist.php?ztid=".$ztid."';</script>");
		  }
		  else
		  {
		  		echo("<script>alert('标题不能为空！');history.back();</script>");
		  }
	  }
  }


	if($ztid){
		$result=mysql_query("select title from tp_zt where id=".$ztid);
		$smarty->assign("title",mysql_result($result,0,"title"));
	}
		

  //读数据
  $rows = isset($rows);
  $result =mysql_query("select * from tp_wt where ztid=".$ztid." order by px asc",$conn);
  if($result)
  {
	  while($row=mysql_fetch_array($result))
	  {
		  $rows[]=$row;
	  }
  }
  else
  {
	  $rowcount=0;
  }
  //print_r($rows);
  $smarty->assign("rows",$rows);
  $smarty->display("wtlist.html");
  ?>
