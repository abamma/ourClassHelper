<?php
require_once(root_dir.'/smarty/smarty/Smarty.class.php');

$smarty = new Smarty(); //����smartyʵ������$smarty

$smarty->config_dir=root_dir."/smarty/Smarty/Config_File.class.php";  // Ŀ¼����

$smarty->caching=false; //�Ƿ�ʹ�û��棬��Ŀ�ڵ����ڼ䣬���������û���

$smarty->template_dir = root_dir."/tm"; //����ģ��Ŀ¼

$smarty->compile_dir =  root_dir."/tp"; //���ñ���Ŀ¼

$smarty->cache_dir =  root_dir."/smarty_cache"; //�����ļ���

//----------------------------------------------------

//���ұ߽����Ĭ��Ϊ<!--{}-->����ʵ��Ӧ�õ���������JavaScript���ͻ

//----------------------------------------------------

$smarty->left_delimiter = "<!--{";

$smarty->right_delimiter = "}-->";
 

?>
