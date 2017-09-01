<?php
/* @var $this MotorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Motors',
);

$this->menu=array(
	array('label'=>'Create Motor', 'url'=>array('create')),
	array('label'=>'Manage Motor', 'url'=>array('admin')),
);
?>

<h1>Motors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
