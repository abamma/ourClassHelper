<?php
include("conn.php");
require_once(root_dir."/smarty/smarty_inc.php");
$wtid=$_GET["wtid"];
$act=isset($_GET["act"]);
$xxid=isset($_GET["id"]);
//ɾ��

if($act=="del")
  {
	  if($xxid)
	  {
		  if(mysql_query("delete from tp_wt where id=".xxid))
		  {
			  echo("<script>alert('ɾ���ɹ���');window.location='xxlist.php?wtid=".$wtid."';</script>");
		  }
		  else
		  {
		  		echo("<script>alert('���ⲻ��Ϊ�գ�');history.back();</script>");
		  }
	  }
  }


	if($wtid){
		$result=mysql_query("select tp_wt.title,tp_zt.id from tp_wt,tp_zt where tp_wt.ztid=tp_zt.id and tp_wt.id=".$wtid);
		$title=mysql_result($result,0,"title");
		$ztid=mysql_result($result,0,"id");
	}

  //������
  $result =mysql_query("select * from tp_xx where wtid=".$wtid." order by px asc",$conn);
  if($result)
  {
	  while($row=mysql_fetch_array($result))
	  {
	 	$rows[]=$row;
	  }
  }

  $smarty->assign("wtid",$wtid);
  $smarty->assign("ztid",$ztid);
  $smarty->assign("title",$title);
  $smarty->assign("rows",isset($rows));
  $smarty->display("xxlist.html");
?>