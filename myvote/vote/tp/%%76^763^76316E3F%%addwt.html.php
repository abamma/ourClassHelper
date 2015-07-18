<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php if ($this->_tpl_vars['Oldtitle'] == ""): ?>添加问题题<?php else: ?><?php echo $this->_tpl_vars['Oldtitle']; ?>
---修改<?php endif; ?></title>
<script language="javascript" src="js/date.js"></script>
<style>
td{background-color:#FFF; padding:5px; font-size:12px; line-height:25px;}
</style>
</head>
<body>
<table width="460" border="0" cellpadding="5" cellspacing="1" bgcolor="#666666" align="center">
 <tr>
    <td align="left" style="font-weight:bold; font-size:14px; background-color:#6AA0E4; color:#FFF;">
    投票问题
    </td>

   <form action="addwt.php" method="post">
  <tr>
    <td align="left"><input name="ztid" type="hidden" value="<?php echo $this->_tpl_vars['ztid']; ?>
" />
    <input name="wtid" type="hidden" value="<?php echo $this->_tpl_vars['wtid']; ?>
" />
    标&nbsp;&nbsp;&nbsp;&nbsp;题：<input name="title" type="text" value="<?php echo $this->_tpl_vars['Oldtitle']; ?>
" style="width:200px;"/>
	</td>
  </tr>
  <tr>
    <td align="left">排&nbsp;&nbsp;&nbsp;&nbsp;序：<input name="px" type="text" value="<?php if ($this->_tpl_vars['Oldpx']): ?><?php echo $this->_tpl_vars['Oldpx']; ?>
<?php else: ?>0<?php endif; ?>" style="width:20px;"/>
	</td>
  </tr>
  <tr>
    <td align="left">选项类型：<input name="xxx" type="radio" value="0" checked/>单选<input name="xxx" type="radio" value="1" <?php if ($this->_tpl_vars['Oldxx']): ?>checked<?php endif; ?>/>多选
	</td>
  </tr>
  <tr>
  <td align="center">
    <input name="ok" type="submit" value="<?php echo $this->_tpl_vars['buttontitle']; ?>
"/>&nbsp;&nbsp;&nbsp;&nbsp;<input name="" type="button" value="返回列表" onclick="window.location='wtlist.php?ztid=<?php echo $this->_tpl_vars['ztid']; ?>
'"/>
    </td>
    </tr>
</form>
</table>
</body>
</html>