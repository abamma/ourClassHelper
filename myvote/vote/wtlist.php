<?php

include("conn.php");
require_once(root_dir."/smarty/smarty_inc.php");
$ztid=$_GET["ztid"];
$act=isset($_GET["act"]);
$wtid=isset($_GET["id"]);
$smarty->assign("ztid",$ztid);
//ɾ��

if($act=="del")
  {
	  if($wtid)
	  {
		  if(mysql_query("delete from tp_wt where id=".$wtid))
		  {
			  mysql_query("delete from tp_xx where wtid=".$wtid);
			  echo("<script>alert('ɾ���ɹ���');window.location='wtlist.php?ztid=".$ztid."';</script>");
		  }
		  else
		  {
		  		echo("<script>alert('���ⲻ��Ϊ�գ�');history.back();</script>");
		  }
	  }
  }


	if($ztid){
		$result=mysql_query("select title from tp_zt where id=".$ztid);
		$smarty->assign("title",mysql_result($result,0,"title"));
	}
		

  //������
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
