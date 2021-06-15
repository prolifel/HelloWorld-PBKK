<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StudentSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nrp' => '05111840000013',
				'name' => 'Clement Prolifel Priyatama',
				'address' => 'Jalan Jaya Srani 2 7E/15',
				'department' => 'Teknik Informatika',
				'phone' => '08123456789'
			],
			[
				'nrp' => '05111840000014',
				'name' => 'Anggara',
				'address' => 'Jalan Teknik Kimia',
				'department' => 'Teknik Informatika',
				'phone' => '0123'
			],
			[
				'nrp' => '05111840000011',
				'name' => 'Messi',
				'address' => 'Jalan Teknik Sipil',
				'department' => 'Teknik Kimia',
				'phone' => '01212323'
			]
		];

		$this->db->table('students')->insertBatch($data);
	}
}
