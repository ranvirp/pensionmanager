<?php

class beneficiaryTest extends WebTestCase
{
	public $fixtures=array(
		'beneficiaries'=>'beneficiary',
	);

	public function testShow()
	{
		$this->open('?r=beneficiary/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=beneficiary/create');
	}

	public function testUpdate()
	{
		$this->open('?r=beneficiary/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=beneficiary/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=beneficiary/index');
	}

	public function testAdmin()
	{
		$this->open('?r=beneficiary/admin');
	}
}
