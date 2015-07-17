<?php

include("conn.php");
require_once(root_dir."/smarty/smarty_inc.php");
$id=isset($_GET["id"]);
$Oldtitle="";
$oldendtime="";
$oldisip=1;
$oldisdl=1;
$buttontitle="添加";

if($id)
  {
	  $buttontitle="修改";
	  if($id)
	  {
		  $id=$_GET["id"];
		  $result1 =mysql_query("select title,endtime,isdl,isip from tp_zt where id=".$id,$conn);
		  $Oldtitle=mysql_result($result1,0,0);
		  $oldendtime=date("Y-m-d",strtotime(mysql_result($result1,0,1)));
		  $oldisdl=mysql_result($result1,0,2);
		  $oldisip=mysql_result($result1,0,3);
	  }
  }
  
  
  $ok=isset($_POST["ok"]);
    
  if($ok)
  {
	$title=$_POST["title"];
    $ztid=$_POST["ztid"];
	$endtime=$_POST["endtime"];
	$isdl=$_POST["isdl"];
	$isip=$_POST["isip"];
	$title0=$_POST["title0"];
	$title1=$_POST["title1"];
	$title2=$_POST["title2"];
	$title3=$_POST["title3"];
	$title4=$_POST["title4"];
	$wtid=$_POST["wtid"];
	$wttype=$_POST["xxx"];
	$px1=1;
	$px2=2;
	$px3=3;
	$px4=4;
	$px5=5;
	//echo($title0);
	//echo($title1);
	//echo($title2);
	//echo($title3);
	//echo($title4);
	$tp_total=0;
	  if(!$ztid)
	  {
		  if($title)
		  {
			if(mysql_num_rows(mysql_query("select * from tp_zt where title='".$title."'")))
			  {echo("<script>alert('此主题已存在！');history.back();</script>");}
			else
			  {
				  if(mysql_query("insert into tp_zt(title,endtime,isdl,isip)values('".$title."','".$endtime."',".$isdl.",".$isip.")"))
				  {
					 $result2  =  mysql_query("SELECT LAST_INSERT_ID()");
					 $ztid = mysql_result($result2,0,0);
					 echo($ztid);
					  //&&
				  if(mysql_query("insert into tp_wt(title,px,ztid,wttype)values('".$title0."',".$px5.",".$ztid.",".$wttype.")")){
					  $result3  =  mysql_query("SELECT LAST_INSERT_ID()");
					 $wtid = mysql_result($result3,0,0);
					 if( mysql_query("insert into tp_xx(title,px,wtid,tp_total)values('".$title1."',".$px1.",".$wtid.",".$tp_total.")")&&
						mysql_query("insert into tp_xx(title,px,wtid,tp_total)values('".$title2."',".$px2.",".$wtid.",".$tp_total.")")&&
						mysql_query("insert into tp_xx(title,px,wtid,tp_total)values('".$title3."',".$px3.",".$wtid.",".$tp_total.")")&&
						mysql_query("insert into tp_xx(title,px,wtid,tp_total)values('".$title4."',".$px4.",".$wtid.",".$tp_total.")"))
					  echo("<script>alert('添加成功！');window.location='ztlist.php';</script>");
				  }
				  else
					  echo("<script>alert('添加不成功！');</script>");
				 // mysql_query("insert into tp_xx(title,px,wtid,tp_total)values('".$title1."',".$px1.",".$wtid.",".$tp_total.")")&&
				 // mysql_query("insert into tp_xx(title,px,wtid,tp_total)values('".$title2."',".$px2.",".$wtid.",".$tp_total.")")&&
				 // mysql_query("insert into tp_xx(title,px,wtid,tp_total)values('".$title3."',".$px3.",".$wtid.",".$tp_total.")")&&
				 // mysql_query("insert into tp_xx(title,px,wtid,tp_total)values('".$title4."',".$px4.",".$wtid.",".$tp_total.")")
					  
				  }
				  else
				  {
					  echo("<script>alert('添加不成功！');</script>");
				  }
			  }
		  }
		  else
		  {
		  echo("<script>alert('标题不能为空！');history.back();</script>");
		  }
	  }
	  else
	  {
		  if($title&&$ztid)
		  {
			  if(mysql_num_rows(mysql_query("select * from tp_zt where title='".$title."' and id<>".$ztid)))
			  {echo("<script>alert('此主题已存在！');history.back();</script>");}
			  else
			  {
				  if(mysql_query("update tp_zt set title='".$title."',endtime='".$endtime."',isdl=".$isdl.",isip=".$isip." where id=".$ztid))
				  {
					  echo("<script>alert('修改成功！');window.location='ztlist.php';</script>");
				  }
				  else
				  {
					  echo("<script>alert('修改不成功！');</script>");
				  }
			  }
		  }
		  else
		  {
		  echo("<script>alert('标题不能为空！');history.back();</script>");
		  }
	  }
  }


$smarty->assign("id",$id);
$smarty->assign("Oldtitle",$Oldtitle);
$smarty->assign("oldendtime",$oldendtime);
$smarty->assign("oldisip",$oldisip);
$smarty->assign("oldisdl",$oldisdl);
$smarty->assign("buttontitle",$buttontitle);
$smarty->display("addzt.html");
?>