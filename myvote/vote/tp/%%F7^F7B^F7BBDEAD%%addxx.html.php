<?php  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php if ($this->_tpl_vars['Oldtitle'] == ""): ?>���ѡ��<?php else: ?><?php echo $this->_tpl_vars['Oldtitle']; ?>
---�޸�<?php endif; ?></title>
<script language="javascript" src="js/date.js"></script>
<style>
td{background-color:#FFF; padding:5px; font-size:12px; line-height:25px;}
</style>
</head>
<body>
<table width="460" border="0" cellpadding="5" cellspacing="1" bgcolor="#666666" align="center">
 <tr>
    <td align="left" style="font-weight:bold; font-size:14px; background-color:#6AA0E4; color:#FFF;">
    ͶƱѡ��
    </td>

   <form method="post">
  <tr>
    <td align="left"><input name="wtid" type="hidden" value="<?php echo $this->_tpl_vars['wtid']; ?>
" />
    <input name="xxid" type="hidden" value="<?php echo $this->_tpl_vars['xxid']; ?>
" />
    ��&nbsp;&nbsp;&nbsp;&nbsp;�⣺<input name="title" type="text" value="<?php echo $this->_tpl_vars['Oldtitle']; ?>
" style="width:200px;"/>
	</td>
  </tr>
  <tr>
    <td align="left">��&nbsp;&nbsp;&nbsp;&nbsp;��<input name="px" type="text" value="<?php if ($this->_tpl_vars['Oldpx']): ?><?php echo $this->_tpl_vars['Oldpx']; ?>
<?php else: ?>0<?php endif; ?>" style="width:20px;"/>
	</td>
  </tr>
  <tr>
    <td align="left">Ͷ&nbsp;Ʊ&nbsp;����<input name="tp_total" type="text" value="<?php if ($this->_tpl_vars['Oldtp_total']): ?><?php echo $this->_tpl_vars['Oldtp_total']; ?>
<?php else: ?>0<?php endif; ?>" style="width:20px;"/>
	</td>
  </tr>
  <tr>
  <td align="center">
    <input name="ok" type="submit" value="<?php echo $this->_tpl_vars['buttontitle']; ?>
"/>&nbsp;&nbsp;&nbsp;&nbsp;<input name="" type="button" value="�����б�" onclick="window.location='xxlist.php?wtid=<?php echo $this->_tpl_vars['wtid']; ?>
'"/>
    </td>
    </tr>
</form>
</table>
</body>
</html>