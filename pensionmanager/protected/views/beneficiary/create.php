<?php
$this->breadcrumbs=array(
	'Beneficiaries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List beneficiary', 'url'=>array('index')),
	array('label'=>'Manage beneficiary', 'url'=>array('admin')),
);
?>

<h1>Create beneficiary</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>