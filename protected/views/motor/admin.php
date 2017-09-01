<?php
/* @var $this MotorController */
/* @var $model Motor */

$this->breadcrumbs=array(
	'Motors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Motor', 'url'=>array('index')),
	array('label'=>'Create Motor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('motor-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Motorcycles</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'motor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'make',
		'model',
		array(
			'name'=>'color',
			'value'=> 'Motor::getColorById($data->color)',
			'filter'=>Motor::getColorList(),
		),
		'weight',
		'price',		
		'cc',
		'created_at',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
