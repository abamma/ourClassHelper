<?php /* Smarty version 2.6.26, created on 2015-07-15 10:00:34
         compiled from tp.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'tp.html', 69, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>投票</title>
		<style>
			td {
				background-color: #FFF;
				font-size: 12px;
			}
			a {
				text-decoration: none;
				color: #666;
			}
		</style>
		<link href="bootstrap.min.css" rel="stylesheet" />
	</head>

	<body class="container" background="bg.jpg">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2" style="margin-top: 5%;">
				<div class="panel panel-primary">
					<table class="table table-bordered table-hover">
						<tr>
							<div class="panel-heading" align="center">
							<?php echo $this->_tpl_vars['title']; ?>

							</div>
						</tr>
						<form method="post">
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
							<tr align='left'>
								<td>
									<?php echo $this->_sections['sec']['index']+1; ?>
、
									<?php echo $this->_tpl_vars['rows'][$this->_sections['sec']['index']]['title']; ?>

								</td>
							</tr>

							<tr>
								<td align='center'>
									<table width='90%' border='0' cellpadding='0' cellspacing='0'>
										<tr>

											<?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['rows'][$this->_sections['sec']['index']]['tpxx']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sec1']['show'] = true;
$this->_sections['sec1']['max'] = $this->_sections['sec1']['loop'];
$this->_sections['sec1']['step'] = 1;
$this->_sections['sec1']['start'] = $this->_sections['sec1']['step'] > 0 ? 0 : $this->_sections['sec1']['loop']-1;
if ($this->_sections['sec1']['show']) {
    $this->_sections['sec1']['total'] = $this->_sections['sec1']['loop'];
    if ($this->_sections['sec1']['total'] == 0)
        $this->_sections['sec1']['show'] = false;
} else
    $this->_sections['sec1']['total'] = 0;
if ($this->_sections['sec1']['show']):

            for ($this->_sections['sec1']['index'] = $this->_sections['sec1']['start'], $this->_sections['sec1']['iteration'] = 1;
                 $this->_sections['sec1']['iteration'] <= $this->_sections['sec1']['total'];
                 $this->_sections['sec1']['index'] += $this->_sections['sec1']['step'], $this->_sections['sec1']['iteration']++):
$this->_sections['sec1']['rownum'] = $this->_sections['sec1']['iteration'];
$this->_sections['sec1']['index_prev'] = $this->_sections['sec1']['index'] - $this->_sections['sec1']['step'];
$this->_sections['sec1']['index_next'] = $this->_sections['sec1']['index'] + $this->_sections['sec1']['step'];
$this->_sections['sec1']['first']      = ($this->_sections['sec1']['iteration'] == 1);
$this->_sections['sec1']['last']       = ($this->_sections['sec1']['iteration'] == $this->_sections['sec1']['total']);
?>

											<td align='left'>
												<?php if ($this->_tpl_vars['rows'][$this->_sections['sec']['index']]['tpxx'][$this->_sections['sec1']['index']]['wttype'] > 0): ?>
												<input name='wt_<?php echo $this->_sections['sec']['index']+1; ?>
[]' type='checkbox' value='<?php echo $this->_tpl_vars['rows'][$this->_sections['sec']['index']]['tpxx'][$this->_sections['sec1']['index']]['id']; ?>
' />&nbsp;
												<?php else: ?>
												<input name='wt_<?php echo $this->_sections['sec']['index']+1; ?>
[]' type='radio' value='<?php echo $this->_tpl_vars['rows'][$this->_sections['sec']['index']]['tpxx'][$this->_sections['sec1']['index']]['id']; ?>
' />&nbsp;
												<?php endif; ?>
												<?php echo $this->_tpl_vars['rows'][$this->_sections['sec']['index']]['tpxx'][$this->_sections['sec1']['index']]['title']; ?>

											</td>
											<?php endfor; endif; ?>

										</tr>
									</table>
								</td>
							</tr>
							<?php endfor; else: ?>
							<tr>
								<td>暂时无数据</td>
							</tr>
							<?php endif; ?>
							<tr>
								<td align="center">
									<input name="num" type="hidden" value="<?php echo count($this->_tpl_vars['rows']); ?>
" />
									<input class="btn btn-success" name="ok" type="submit" value="提交" /> &nbsp;&nbsp;
									<input class="btn btn-info" name="" type="button" onclick="window.open('showtp.php?id=<?php echo $this->_tpl_vars['id']; ?>
');" value="查看投票结果" />
								</td>
							</tr>
							<!--smarty中用“$rows|@count”计算数组$rows的长度-->
						</form>
					</table>
				</div>
			</div>
		</div>
		<script src="jquery-2.1.4.min.js"></script>
		<script src="bootstrap.min.js"></script>
	</body>

</html>