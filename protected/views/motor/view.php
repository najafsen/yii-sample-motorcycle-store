<?php
/* @var $this MotorController */
/* @var $model Motor */

$this->breadcrumbs=array(
	'Motors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Motor', 'url'=>array('index')),
	array('label'=>'Create Motor', 'url'=>array('create')),
	array('label'=>'Update Motor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Motor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Motor', 'url'=>array('admin')),
);
?>

<h1>View Motor <?php echo $model->model; ?></h1>

<b><?php echo CHtml::encode($model->getAttributeLabel('model')); ?>:</b>
<?php echo CHtml::encode($model->model); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('cc')); ?>:</b>
<?php echo CHtml::encode($model->cc); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('color')); ?>:</b>
<?php echo CHtml::encode(Motor::getColorById($model->color)); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('weight')); ?>:</b>
<?php echo CHtml::encode($model->weight); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('price')); ?>:</b>
<?php echo CHtml::encode($model->price); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('year')); ?>:</b>
<?php echo CHtml::encode($model->year); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('created_at')); ?>:</b>
<?php echo CHtml::encode($model->created_at); ?>
<br />

<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->image,"image",array("width"=>500)); ?>
<br />
