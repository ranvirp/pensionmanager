<?php

/**
 * This is the model class for table "{{beneficiary}}".
 *
 * The followings are the available columns in table '{{beneficiary}}':
 * @property integer $id
 * @property string $name
 * @property string $father_husband_name
 * @property integer $bank_account_no
 */
class beneficiary extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{beneficiary}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, father_husband_name, bank_account_no', 'required'),
			array('bank_account_no', 'numerical', 'integerOnly'=>true),
			array('name, father_husband_name', 'length', 'max'=>255),
			array('status', 'SWValidator'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, father_husband_name, bank_account_no', 'safe', 'on'=>'search'),
		);
	}
public function behaviors()
{
    return array(
        'swBehavior'=>array(
            'class' => 'application.extensions.simpleWorkflow.SWActiveRecordBehavior',
        ),
    );
}
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'name' => 'Name',
			'father_husband_name' => 'Father Husband Name',
			'bank_account_no' => 'Bank Account No',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('name',$this->name,true);

		$criteria->compare('father_husband_name',$this->father_husband_name,true);

		$criteria->compare('bank_account_no',$this->bank_account_no);

		return new CActiveDataProvider('beneficiary', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return beneficiary the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}