<?php /* Smarty version 2.6.26, created on 2015-07-15 09:34:11
         compiled from ztlist.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'ztlist.html', 57, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>投票主题列表</title>
		<style>
			td {
				background-color: #FFF;
				padding: 5px;
				font-size: 12px;
			}
			a {
				text-decoration: none;
				color: #666;
			}
		</style>
		<link href="bootstrap.css" rel="stylesheet">
	</head>

	<body class="container" background="bg.jpg">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2" style="margin-top: 5%;">
				<div class="panel panel-primary">
					<table class="table table-bordered table-hover">
						<tr>
							<!--<td colspan="6" align="left" style="font-weight:bold; font-size:14px; background-color:#6AA0E4; color:#FFF;">
								投票主题列表
							</td>-->
							<div class="panel-heading">投票主题</div>
						</tr>
						<tr align="center" style="font-weight:bold;">
							<td>序号</td>
							<td>标题</td>
							<td>是否需要登录</td>
							<td>IP</td>
							<td>截止日期</td>
							<td>操作</td>
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
						<tr>
							<td align='center'>
								<?php echo $this->_tpl_vars['rows'][$this->_sections['sec']['index']]['id']; ?>

							</td>
							<td align='left'>
								<?php echo $this->_tpl_vars['rows'][$this->_sections['sec']['index']]['title']; ?>

							</td>
							<td align='center'>
								<?php echo $this->_tpl_vars['rows'][$this->_sections['sec']['index']]['isdl']; ?>

							</td>
							<td align='center'>
								<?php echo $this->_tpl_vars['rows'][$this->_sections['sec']['index']]['isip']; ?>

							</td>
							<td>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['rows'][$this->_sections['sec']['index']]['endtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>

							</td>
							<td><a class="btn btn-danger" onclick='return confirm(\"是否要删除！\")' href='ztlist.php?act=del&id=<?php echo $this->_tpl_vars['rows'][$this->_sections['sec']['index']]['id']; ?>
'>删除</a>&nbsp;&nbsp;<a class="btn btn-warning" href='addzt.php?id=<?php echo $this->_tpl_vars['rows'][$this->_sections['sec']['index']]['id']; ?>
'>修改</a>&nbsp;&nbsp;<a class="btn btn-success" href='wtlist.php?ztid=<?php echo $this->_tpl_vars['rows'][$this->_sections['sec']['index']]['id']; ?>
'>问题</a>&nbsp;&nbsp;
								<a class="btn btn-info"
								href='showtp.php?id=<?php echo $this->_tpl_vars['rows'][$this->_sections['sec']['index']]['id']; ?>
'>查看</a>
							</td>
						</tr>
						<?php endfor; else: ?>
						<tr>
							<td colspan=4>暂时无数据</td>
						</tr>
						<?php endif; ?>
						<tr>
							<td colspan="6" align="left"><a class="btn btn-primary" href="addzt.php">增加新主题</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<script src="jquery-2.1.4.min.js"></script>
		<script src="bootstrap.min.js"></script>
	</body>

</html>