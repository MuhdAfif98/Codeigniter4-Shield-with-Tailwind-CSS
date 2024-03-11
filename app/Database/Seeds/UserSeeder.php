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
				"name" => "Sekolah",
				"email" => "",
				"phone_no" => "",
				"role" => "sekolah",
				"password" => password_hash("sekolah123", PASSWORD_DEFAULT)
			],
			[
				"name" => "Jabatan Pendidikan Negeri Terengganu",
				"email" => "",
				"phone_no" => "",
				"role" => "jpnt",
				"password" => password_hash("jpnt123", PASSWORD_DEFAULT)
			]
		]);
	}
}