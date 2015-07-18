<?php
include("conn.php");
require_once(root_dir."/smarty/smarty_inc.php");
$id=$_GET["id"];

	if($id){
		$result=mysql_query("select title from tp_zt where id=".$id);
		if(!mysql_fetch_row($result))
		{
			echo("<script>alert('参数错误，请不要恶意操作！');window.location='/';</script>");			
		}
		else
		{
			$title=mysql_result($result,0,0);
		}
	}
		 
  //读数据
  $result =mysql_query("select * from tp_wt where ztid=".$id." order by px asc");
  $rows=array();//存放问题的数组
  if($result)
  {
	  while($row=mysql_fetch_array($result))
	  {
	 			
		$result1=mysql_query("select * from tp_xx where wtid=".$row["id"]." order by px asc");
		$rows1=array();//存放问题选项的数组
		if($result1)
		{
			while($row1=mysql_fetch_array($result1))
	  		{
				if($row["tp_total"]>0)
				{
					$row1["width"]=round($row1["tp_total"]/$row["tp_total"]*100,2);
				}
				else
				{
					$row1["width"]=0;
				}

				//print_r($row1);
				$rows1[]=$row1;
			}
		}
		$row["tpxx"]=$rows1;//将问题选项存于对应问题数组“tpxx”中
		//print_r($row);
		$rows[]=$row;
	  }
  }
 $smarty->assign("id",$id);
$smarty->assign("rows",$rows);
$smarty->assign("title",$title);
$smarty->display("showtp.html");
  ?>