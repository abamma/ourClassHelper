<?php  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['title']; ?>
---����ѡ���б�</title>
<style>
td{background-color:#FFF; padding:5px; font-size:12px;}
a{text-decoration:none; color:#666;}
</style>
</head>
<body>
<table width="460" border="0" cellpadding="5" cellspacing="1" bgcolor="#666666" align="center">
<tr>
    <td colspan="5" align="left" style=" color:#F00; font-weight:bold;font-size:14px;">
    <span style="color:#000">����:</span>
	<?php echo $this->_tpl_vars['title']; ?>

    </td>
    </tr>
 <tr>
    <td colspan="5" align="left" style="font-weight:bold;  background-color:#6AA0E4; color:#FFF;">
    ����ѡ���б�
    </td>
    </tr>
   <tr align="center" style="font-weight:bold;">
    <td>���</td>
    <td>����</td>
    <td>ͶƱ��</td>
    <td>����</td>
    <td>����</td>
  </tr>
   <?php unset($this->_sections['sec']);
$this->_sections['sec']['name'] = 'sec';
$this->_sections['sec']['loop'] = is_array($_loop=$this->_tpl_vars['rows']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sec']['show'] = true;
$this->_sections['sec']['max'] = $this->_sections['sec']['loop'];
$this->_sections['sec']['step'] = 1;
$this->_sections['sec']['start'] = $this->_sections['sec']['step'] > 0 ? 0 : $this->_sections['sec']['loop']-1;
if ($this->_sections['sec']['show']) {
    $this->_sections['sec']['total'] = $this->_sections['sec']['loop'];
    if ($this->_sections['sec']['total'] == 0)
        $this->_sections['sec']['show'] = false;
} else
    $this->_sections['sec']['total'] = 0;
if ($this->_sections['sec']['show']):

            for ($this->_sections['sec']['index'] = $this->_sections['sec']['start'], $this->_sections['sec']['iteration'] = 1;
                 $this->_sections['sec']['iteration'] <= $this->_sections['sec']['total'];
                 $this->_sections['sec']['index'] += $this->_sections['sec']['step'], $this->_sections['sec']['iteration']++):
$this->_sections['sec']['rownum'] = $this->_sections['sec']['iteration'];
$this->_sections['sec']['index_prev'] = $this->_sections['sec']['index'] - $this->_sections['sec']['step'];
$this->_sections['sec']['index_next'] = $this->_sections['sec']['index'] + $this->_sections['sec']['step'];
$this->_sections['sec']['first']      = ($this->_sections['sec']['iteration'] == 1);
$this->_sections['sec']['last']       = ($this->_sections['sec']['iteration'] == $this->_sections['sec']['total']);
?>
	 	<tr align='center'><td><?php echo $this->_tpl_vars['rows'][$this->_sections['sec']['index']]['id']; ?>

		</td>
		<td align='left'><?php echo $this->_tpl_vars['rows'][$this->_sections['sec']['index']]['title']; ?>

		</td>
		<td><?php echo $this->_tpl_vars['rows'][$this->_sections['sec']['index']]['tp_total']; ?>

		</td>
		<td><?php echo $this->_tpl_vars['rows'][$this->_sections['sec']['index']]['px']; ?>

		</td>
		<td><a onclick='return confirm(\"�Ƿ�Ҫɾ����\")' href='xxlist.php?act=del&id=<?php echo $this->_tpl_vars['rows'][$this->_sections['sec']['index']]['id']; ?>
'>ɾ��</a>&nbsp;&nbsp;<a href='addxx.php?wtid=<?php echo $this->_tpl_vars['wtid']; ?>
&xxid=<?php echo $this->_tpl_vars['rows'][$this->_sections['sec']['index']]['id']; ?>
'>�޸�</a>
		</td>
		</tr>
 <?php endfor; else: ?>
	  <tr><td colspan=5>��ʱ������</td></tr>
  <?php endif; ?>
  <tr><td colspan="5" align="left"><a href="addxx.php?wtid=<?php echo $this->_tpl_vars['wtid']; ?>
">������ѡ��</a>&nbsp;&nbsp;&nbsp;&nbsp;<input name="" type="button" value="�����б�" onclick="window.location='wtlist.php?ztid=<?php echo $this->_tpl_vars['ztid']; ?>
'"/></td></tr>
</table>
</body>
</html>