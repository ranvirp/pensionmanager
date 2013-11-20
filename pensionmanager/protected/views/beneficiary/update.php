<?php
$this->breadcrumbs=array(
	'Beneficiaries'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List beneficiary', 'url'=>array('index')),
	array('label'=>'Create beneficiary', 'url'=>array('create')),
	array('label'=>'View beneficiary', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage beneficiary', 'url'=>array('admin')),
);
?>

<h1>Update beneficiary <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>