<?php

class m110517_155003_create_tables_audit_trail extends CDbMigration
{

	/**
	 * Creates initial version of the audit trail table
	 */
	public function up()
	{

		//Create our first version of the audittrail table	
		//Please note that this matches the original creation of the 
		//table from version 1 of the extension. Other migrations will
		//upgrade it from here if we ever need to. This was done so
		//that older versions can still use migrate functionality to upgrade.
		$this->createTable( '{{audit_trail}}',
			array(
				'id' => 'pk',
				'old_value' => 'text',
				'new_value' => 'text',
				'action' => 'string NOT NULL',
				'model' => 'string NOT NULL',
				'field' => 'string NOT NULL',
				'stamp' => 'datetime NOT NULL',
				'user_id' => 'string',
				'model_id' => 'string NOT NULL',
			)
		);

		//Index these bad boys for speedy lookups
		$this->createIndex( 'idx_audit_trail_user_id', '{{audit_trail}}', 'user_id');
		$this->createIndex( 'idx_audit_trail_model_id', '{{audit_trail}}', 'model_id');
		$this->createIndex( 'idx_audit_trail_model', '{{audit_trail}}', 'model');
		$this->createIndex( 'idx_audit_trail_field', '{{audit_trail}}', 'field');
		$this->createIndex( 'idx_audit_trail_old_value', '{{audit_trail}}', 'old_value');
		$this->createIndex( 'idx_audit_trail_new_value', '{{audit_trail}}', 'new_value');
		$this->createIndex( 'idx_audit_trail_action', '{{audit_trail}}', 'action');
	}

	/**
	 * Drops the audit trail table
	 */
	public function down()
	{
		$this->dropTable( '{{audit_trail}}' );
	}

	/**
	 * Creates initial version of the audit trail table in a transaction-safe way.
	 * Uses $this->up to not duplicate code.
	 */
	public function safeUp()
	{
		$this->up();
	}

	/**
	 * Drops the audit trail table in a transaction-safe way.
	 * Uses $this->down to not duplicate code.
	 */
	public function safeDown()
	{
		$this->down();
	}
}