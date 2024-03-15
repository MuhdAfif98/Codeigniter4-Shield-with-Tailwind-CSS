<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
	public function run()
	{
		$user_object = new UserModel();

		$user_object->insertBatch([
			[
				"username" => "Super Admin",
				"status" => NULL,
				"status_message" => NULL,
				"active" => 1,
				"last_active" => NULL,
			],
			[
				"username" => "Sekolah",
				"status" => NULL,
				"status_message" => NULL,
				"active" => 1,
				"last_active" => NULL,
			],
			[
				"username" => "Jabatan Pendidikan Negeri Terengganu",
				"status" => NULL,
				"status_message" => NULL,
				"active" => 1,
				"last_active" => NULL,
			]
		]);
	}
}
