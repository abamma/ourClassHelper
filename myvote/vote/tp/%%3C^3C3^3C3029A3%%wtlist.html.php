<?php /* Smarty version 2.6.26, created on 2015-07-15 09:25:25
         compiled from wtlist.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['title']; ?>
---�����б�</title>
<style>
td{background-color:#FFF; padding:5px; font-size:12px;}
a{text-decoration:none; color:#666;}
</style>
</head>
<body>
<table width="600" border="0" cellpadding="5" cellspacing="1" bgcolor="#666666" align="center">
<tr>
    <td colspan="7" align="left" style=" color:#F00; font-weight:bold;font-size:14px;">
    <span style="color:#000">ͶƱ����:</span>
		<?php echo $this->_tpl_vars['title']; ?>

    </td>
    </tr>
 <tr>
    <td colspan="7" align="left" style="font-weight:bold;  background-color:#6AA0E4; color:#FFF;">
    ͶƱ�����б�
    </td>
    </tr>
   <tr align="center" style="font-weight:bold;">
    <td>���</td>
    <td>����</td>
    <td>ѡ�����</td>
    <td>ѡ����</td>
    <td>ͶƱ��</td>
    <td>����</td>
    <td>����</td>
  </tr>
<?php unset($this->_sections['rec']);
$this->_sections['rec']['name'] = 'rec';
$this->_sections['rec']['loop'] = is_array($_loop=$this->_tpl_vars['rows']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['rec']['show'] = true;
$this->_sections['rec']['max'] = $this->_sections['rec']['loop'];
$this->_sections['rec']['step'] = 1;
$this->_sections['rec']['start'] = $this->_sections['rec']['step'] > 0 ? 0 : $this->_sections['rec']['loop']-1;
if ($this->_sections['rec']['show']) {
    $this->_sections['rec']['total'] = $this->_sections['rec']['loop'];
    if ($this->_sections['rec']['total'] == 0)
        $this->_sections['rec']['show'] = false;
} else
    $this->_sections['rec']['total'] = 0;
if ($this->_sections['rec']['show']):

            for ($this->_sections['rec']['index'] = $this->_sections['rec']['start'], $this->_sections['rec']['iteration'] = 1;
                 $this->_sections['rec']['iteration'] <= $this->_sections['rec']['total'];
                 $this->_sections['rec']['index'] += $this->_sections['rec']['step'], $this->_sections['rec']['iteration']++):
$this->_sections['rec']['rownum'] = $this->_sections['rec']['iteration'];
$this->_sections['rec']['index_prev'] = $this->_sections['rec']['index'] - $this->_sections['rec']['step'];
$this->_sections['rec']['index_next'] = $this->_sections['rec']['index'] + $this->_sections['rec']['step'];
$this->_sections['rec']['first']      = ($this->_sections['rec']['iteration'] == 1);
$this->_sections['rec']['last']       = ($this->_sections['rec']['iteration'] == $this->_sections['rec']['total']);
?>
  <tr align='center'><td><?php echo $this->_tpl_vars['rows'][$this->_sections['rec']['index']]['id']; ?>

		</td>
		<td align='left'><?php echo $this->_tpl_vars['rows'][$this->_sections['rec']['index']]['title']; ?>

		</td>
		<td>
		<?php if ($this->_tpl_vars['rows'][$this->_sections['rec']['index']]['wttype'] == 0): ?>
		��ѡ
		<?php else: ?>
		��ѡ
		<?php endif; ?>
		</td>
		<td>
		</td>
		<td><?php echo $this->_tpl_vars['rows'][$this->_sections['rec']['index']]['tp_total']; ?>

		</td>
		<td><?php echo $this->_tpl_vars['rows'][$this->_sections['rec']['index']]['px']; ?>

		</td>
		<td><a onclick='return confirm(\"�Ƿ�Ҫɾ����\")' href='wtlist.php?ztid=<?php echo $this->_tpl_vars['rows'][$this->_sections['rec']['index']]['ztid']; ?>
&act=del&id=<?php echo $this->_tpl_vars['rows'][$this->_sections['rec']['index']]['id']; ?>
'>ɾ��</a>&nbsp;&nbsp;<a href='addwt.php?ztid=<?php echo $this->_tpl_vars['ztid']; ?>
&wtid=<?php echo $this->_tpl_vars['rows'][$this->_sections['rec']['index']]['id']; ?>
'>�޸�</a>&nbsp;&nbsp;<a href='xxlist.php?wtid=<?php echo $this->_tpl_vars['rows'][$this->_sections['rec']['index']]['id']; ?>
'>ѡ��</a>
		</td>
		</tr>
<?php endfor; else: ?>
<tr><td colspan=7>��ʱ������</td></tr>
<?php endif; ?>
  <tr><td colspan="7" align="left"><a href="addwt.php?ztid=<?php echo $this->_tpl_vars['ztid']; ?>
">����������</a>&nbsp;&nbsp;&nbsp;&nbsp;<input name="" type="button" value="�����б�" onclick="window.location='ztlist.php'"/></td></tr>
</table>
</body>
</html>