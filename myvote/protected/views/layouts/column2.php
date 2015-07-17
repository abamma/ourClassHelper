<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class="span-19">
		<div id="content">
			<?php echo $content; ?>
			
		</div><!-- content -->
		
	</div>
	<div class="span-5 last">
		<div id="sidebar">
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operations',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
			
			$this->widget('tpZtMenu', array('htmlOptions'=>array('class'=>'operations'),));
			$this->widget('tpWtMenu', array('htmlOptions'=>array('class'=>'operations'),));
			$this->widget('tpXxMenu', array('htmlOptions'=>array('class'=>'operations'),));
			$this->widget('UserMenu', array('htmlOptions'=>array('class'=>'operations'),));
		?>
		
		</div><!-- sidebar -->
	</div>
	
</div>
<?php $this->endContent(); ?>