<?php /* Smarty version 2.6.26, created on 2015-07-15 10:11:28
         compiled from addzt.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			<?php if ($this->_tpl_vars['Oldtitle'] == ""): ?>���ͶƱ����
			<?php else: ?>
			<?php echo $this->_tpl_vars['Oldtitle']; ?>
---�޸�
			<?php endif; ?>
		</title>
		<script language="javascript" src="js/date.js"></script>
		<style>
			td {
				background-color: #FFF;
				padding: 5px;
				font-size: 12px;
				line-height: 25px;
			}
		</style>
		<link href="bootstrap.min.css" rel="stylesheet">
	</head>

	<body class="container" background="bg.jpg">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2" style="margin-top: 5%;">
				<div class="panel panel-primary">
					<table class="table table-bordered table-hover">
						<tr>
							<div class="panel-heading">
								ͶƱ��������
							</div>

							<form action="addzt.php" method="post">
								<tr>
									<td align="left">
										<input name="ztid" type="hidden" value="<?php echo $this->_tpl_vars['id']; ?>
" /> ѡ&nbsp;&nbsp;&nbsp;&nbsp;�
										<input name="title" type="text" value="<?php echo $this->_tpl_vars['Oldtitle']; ?>
" style="width:200px;" />
									</td>
								</tr>
								<tr>
									<td align="left">��ֹ���ڣ�
										<input name="endtime" type="text" value="<?php echo $this->_tpl_vars['oldendtime']; ?>
" onclick="SelectDate(this)" style="width:80px;" />
									</td>
								</tr>
								<tr>
									<td align="left">�Ƿ�Ҫ��¼ͶƱ��
										<input name="isdl" type="text" style="width:30px" value="<?php echo $this->_tpl_vars['oldisdl']; ?>
" />&nbsp;1Ϊ�ǣ�0Ϊ��
									</td>
								</tr>
								<tr>
									<td align="left">�Ƿ�ÿ��IPÿ��ֻ��Ͷһ�Σ�
										<input name="isip" type="text" style="width:30px" value="<?php echo $this->_tpl_vars['oldisip']; ?>
" />&nbsp;1Ϊ�ǣ�0Ϊ��
									</td>
								</tr>

					</table>
					<table class="table table-bordered table-hover">
						<tr>
							<td align="left" style="font-weight:bold; font-size:14px; background-color:#337ab7; color:#FFF;">
								ͶƱ����
							</td>
							<tr>
								<td align="left">
									<input name="ztid" type="hidden" value="<?php echo $this->_tpl_vars['ztid']; ?>
" />
									<input name="wtid" type="hidden" value="<?php echo $this->_tpl_vars['wtid']; ?>
" /> ��&nbsp;&nbsp;&nbsp;&nbsp;�⣺
									<input name="title0" type="text" value="<?php echo $this->_tpl_vars['Oldtitle']; ?>
" style="width:200px;" />
								</td>
							</tr>
							<tr>
								<td align="left" style="font-weight:bold; font-size:14px; background-color:#337ab7; color:#FFF;">
									ͶƱѡ��
								</td>
								<tr>
									<tr>
										<td align="left">
											<input name="ztid" type="hidden" value="<?php echo $this->_tpl_vars['ztid']; ?>
" />
											<input name="wtid" type="hidden" value="<?php echo $this->_tpl_vars['wtid']; ?>
" /> ѡ&nbsp;&nbsp;&nbsp;&nbsp;��A��
											<input name="title1" type="text" value="<?php echo $this->_tpl_vars['Oldtitle']; ?>
" style="width:200px;" />
										</td>
									</tr>

					</table>
					<table class="table table-bordered table-hover">
						<tr>

							<tr>
								<td align="left">
									<input name="ztid" type="hidden" value="<?php echo $this->_tpl_vars['ztid']; ?>
" />
									<input name="wtid" type="hidden" value="<?php echo $this->_tpl_vars['wtid']; ?>
" /> ѡ&nbsp;&nbsp;&nbsp;&nbsp;��B��
									<input name="title2" type="text" value="<?php echo $this->_tpl_vars['Oldtitle']; ?>
" style="width:200px;" />
								</td>
							</tr>

					</table>
					<table class="table table-bordered table-hover">
						<td align="left">
							<input name="ztid" type="hidden" value="<?php echo $this->_tpl_vars['ztid']; ?>
" />
							<input name="wtid" type="hidden" value="<?php echo $this->_tpl_vars['wtid']; ?>
" /> ѡ&nbsp;&nbsp;&nbsp;&nbsp;��C��
							<input name="title3" type="text" value="<?php echo $this->_tpl_vars['Oldtitle']; ?>
" style="width:200px;" />
						</td>
						</tr>

					</table>
					<table class="table table-bordered table-hover">
						<tr>

							<tr>
								<td align="left">
									<input name="ztid" type="hidden" value="<?php echo $this->_tpl_vars['ztid']; ?>
" />
									<input name="wtid" type="hidden" value="<?php echo $this->_tpl_vars['wtid']; ?>
" /> ѡ&nbsp;&nbsp;&nbsp;&nbsp;��4��
									<input name="title4" type="text" value="<?php echo $this->_tpl_vars['Oldtitle']; ?>
" style="width:200px;" />
								</td>
							</tr>
							<tr>
								<td align="left">ѡ�����ͣ�
									<input name="xxx" type="radio" value="0" checked/>��ѡ
									<input name="xxx" type="radio" value="1" <?php if ($this->_tpl_vars['Oldxx']): ?>checked
									<?php endif; ?>/>��ѡ
								</td>
							</tr>
							<tr>
								<td align="center">
									<input class="btn btn-success" name="ok" type="submit" value="<?php echo $this->_tpl_vars['buttontitle']; ?>
" />&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="btn btn-info" name="" type="button" value="�����б�" onclick="window.location='ztlist.php'" />
								</td>
							</tr>
							</form>
					</table>
				</div>
			</div>
		</div>
		<script src="jquery-2.1.4.min.js"></script>
		<script src="bootstrap.min.js"></script>
	</body>

</html>