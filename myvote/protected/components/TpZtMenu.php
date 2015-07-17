<?php
Yii::import('zii.widgets.CPortlet');

class TpZtMenu extends CPortlet
{
	public function init()
	{
		$this->title='主题管理';
		parent::init();
	}
	
	protected function renderContent()
	{
		$this->render('TpZtMenu');
	}
}