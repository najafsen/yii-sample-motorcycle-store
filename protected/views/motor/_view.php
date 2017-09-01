<?php
/* @var $this MotorController */
/* @var $data Motor */
?>

<div class="view">
	<div style="display: inline-block;">
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$data->image,"image",array("width"=>150)); ?>
	</div>

	<div style="display: inline-block;">

		<b><?php echo CHtml::encode($data->getAttributeLabel('make')); ?>:</b>
		<?php echo CHtml::encode($data->make); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('model')); ?>:</b>
		<?php echo CHtml::link(CHtml::encode($data->model), array('view', 'id'=>$data->id)); ?>
		<br />
		
		<b><?php echo CHtml::encode($data->getAttributeLabel('color')); ?>:</b>
		<?php echo CHtml::encode(Motor::getColorById($data->color)); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('weight')); ?>:</b>
		<?php echo CHtml::encode($data->weight); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
		<?php echo CHtml::encode($data->price); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('cc')); ?>:</b>
		<?php echo CHtml::encode($data->cc); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
		<?php echo CHtml::encode($data->created_at); ?>
		<br />
	</div>

</div>
