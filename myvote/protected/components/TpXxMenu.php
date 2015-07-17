<?php
Yii::import('zii.widgets.CPortlet');

class TpXxMenu extends CPortlet
{
	public function init()
	{
		$this->title='选项管理';
		parent::init();
	}
	
	protected function renderContent()
	{
		$this->render('TpXxMenu');
	}
}