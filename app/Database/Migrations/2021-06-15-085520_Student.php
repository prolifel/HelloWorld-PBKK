<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Student extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true,
			],
			'nrp' => [
				'type' => 'VARCHAR',
				'constraint' => '14',
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'address' => [
				'type' => 'VARCHAR',
				'constraint' => '200',
			],
			'department' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'phone' => [
				'type' => 'VARCHAR',
				'constraint' => '12',
			],
		]);

		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('students');
	}

	public function down()
	{
		$this->forge->dropTable('students');
	}
}
