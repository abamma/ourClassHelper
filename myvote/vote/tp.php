<?php



include("conn.php");
require_once(root_dir."/smarty/smarty_inc.php");
$id=$_GET["id"];
$ok=isset($_POST["ok"]);
$num=isset($_POST["num"])+1;

if($ok)
{
	$result=mysql_query("select isdl,isip from tp_zt where id=".$id);
	$checkuser=mysql_result($result,0,0);
	$checkip=mysql_result($result,0,1);
	
	$ip=getIP();//��ȡIP
	//�жϴ�IP�Ƿ�ͶƱ��
	if($checkip)//����IP�ж��Ƿ�ͶƱ��
	{
		if($_COOKIE["tp"]=="ok")//����cookies�ж��Ƿ�ͶƱ��
		{
			echo("<script>alert('������Ѿ�Ͷ��Ʊ�ˣ�');history.back();</script>");	
			exit;
		}
		
		if(mysql_num_rows(mysql_query("select * from tp_ip where ztid=".$id." and ip='".$ip."' and addtime>=CURDATE()")))
		{
			echo("<script>alert('������Ѿ�Ͷ��Ʊ�ˣ�');history.back();</script>");	
			exit;
		}
	}
	
	session_start();
	$userid=isset($_SESSION["user"]);
	if($checkuser)//���ݵ�¼USER�ж��Ƿ�ͶƱ��
	{
		if($userid)
		{
			if(mysql_num_rows(mysql_query("select * from tp_ip where ztid=".$id." and userid=".$userid." and addtime>=CURDATE()")))
				{
					echo("<script>alert('������Ѿ�Ͷ��Ʊ�ˣ�');history.back();</script>");	
					exit;
				}
		}
		else
		{
			echo("<script>alert('���ȵ�¼����ͶƱ��');history.back();</script>");	
			exit;
		}
	}
	

	//����Ƿ�ÿ�����ⶼ��ѡ��
	for($j=1;$j<$num;$j++)
	{
		$array=$_POST["wt_".$j];
		if(!$array)
		{
			echo("<script>alert('��ѡ��𰸣�');history.back();</script>");	
			exit;
		}
	}
	
	
	$bz="";
	for($j=1;$j<$num;$j++)
	{
		//print_r($_POST["wt_".$j]);
		$array=$_POST["wt_".$j];
		if($array)
		{
			foreach($array as $arr=>$value)
			{
				$bz=$bz+$value.";";
				if(!isset($wtid))
				{
					$wtid=mysql_result(mysql_query("select wtid from tp_xx where id=".$value),0,0);
				}
				mysql_query("update tp_xx set tp_total=tp_total+1 where id=".$value);
			}
			if($wtid)
			{
				mysql_query("update tp_wt set tp_total=tp_total+1 where id=".$wtid);
			}
			$wtid=0;
		}
	}
	mysql_query("insert into tp_ip(ip,userid,bz,ztid)values('".$ip."',".$userid.",'".$bz."',".$id.")");
	setcookie("tp", "ok",strtotime("+1 day"));//һ���cookies����
	echo("<script>alert('ͶƱ�ɹ���');window.location='showtp.php?id=".$id."';</script>");
	exit;
}

	if($id){
		$result=mysql_query("select title from tp_zt where id=".$id);
		if(!mysql_fetch_row($result))
		{
			echo("<script>alert('���������벻Ҫ���������');window.location='/';</script>");
			exit;
		}
		else
		{
			$title=mysql_result($result,0,0);
		}
	}
		
  //������
  $result =mysql_query("select * from tp_wt where ztid=".$id." order by px asc");
  $rows=array();//������������
  if($result)
  {
	  while($row=mysql_fetch_array($result))
	  {
	 	$result1=mysql_query("select * from tp_xx where wtid=".$row["id"]." order by px asc");
		$rows1=array();//�������ѡ�������
		if($result1)
		{
			while($row1=mysql_fetch_array($result1))
	  		{
				$rows1[]=$row1;
			}
		}
		$row["tpxx"]=$rows1;//������ѡ����ڶ�Ӧ�������顰tpxx����
		//print_r($row);
		$rows[]=$row;
	  }
  }
$smarty->assign("id",$id);
$smarty->assign("rows",$rows);
$smarty->assign("num",count($rows));
$smarty->assign("title",$title);
$smarty->display("tp.html");
  ?>
 