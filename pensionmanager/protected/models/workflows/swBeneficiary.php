<?php
return array(
        'initial' => 'AddPro',
        'node' => array(
            array('id'=>'AddPro', 'label'=>'जोड़ने के लिए प्रस्तावित', 
               'transition'=>'AddForwarded'),
            array('id'=>'AddForwarded', 'constraint'=>'Yii::app()->user->checkAccess("DSWO")',    'transition'=>'AddApproved'),
			array('id'=>'DeletePro',     'transition'=>'DeleteForwared'),
            array('id'=>'DeleteForwarded',     'transition'=>'DeleteApproved'),
            array('id'=>'UpdatePro',     'transition'=>'UpdateApproved'),
			array('id'=>'AddApproved',  'constraint'=>'Yii::app()->user->checkAccess("CDO")',   'transition'=>'Active'),
			array('id'=>'UpdateApproved', 'constraint'=>'Yii::app()->user->checkAccess("DSWO")',    'transition'=>'Active'),
			array('id'=>'DeleteApproved', 'constraint'=>'Yii::app()->user->checkAccess("CDO")',    'transition'=>'AddPro'),
			
			
			array('id'=>'Active',     'transition'=>'AddPro,DeletePro,UpdatePro'),
            
            
            
            
                    )
    )
	?>