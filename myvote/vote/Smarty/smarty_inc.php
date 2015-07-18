<?php
require_once(root_dir.'/smarty/smarty/Smarty.class.php');

$smarty = new Smarty(); //建立smarty实例对象$smarty

$smarty->config_dir=root_dir."/smarty/Smarty/Config_File.class.php";  // 目录变量

$smarty->caching=false; //是否使用缓存，项目在调试期间，不建议启用缓存

$smarty->template_dir = root_dir."/tm"; //设置模板目录

$smarty->compile_dir =  root_dir."/tp"; //设置编译目录

$smarty->cache_dir =  root_dir."/smarty_cache"; //缓存文件夹

//----------------------------------------------------

//左右边界符，默认为<!--{}-->，但实际应用当中容易与JavaScript相冲突

//----------------------------------------------------

$smarty->left_delimiter = "<!--{";

$smarty->right_delimiter = "}-->";
 

?>
