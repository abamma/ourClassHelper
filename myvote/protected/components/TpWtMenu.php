<?php
Yii::import('zii.widgets.CPortlet');

class TpWtMenu extends CPortlet
{
	public function init()
	{
		$this->title='问题管理';
		parent::init();
	}
	
	protected function renderContent()
	{
		$this->render('TpWtMenu');
	}
}