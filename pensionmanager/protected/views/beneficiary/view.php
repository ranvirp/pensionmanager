<?php
$this->breadcrumbs=array(
	'Beneficiaries'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List beneficiary', 'url'=>array('index')),
	array('label'=>'Create beneficiary', 'url'=>array('create')),
	array('label'=>'Update beneficiary', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete beneficiary', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage beneficiary', 'url'=>array('admin')),
);
?>

<h1>View beneficiary #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'father_husband_name',
		'bank_account_no',
	),
)); ?>
