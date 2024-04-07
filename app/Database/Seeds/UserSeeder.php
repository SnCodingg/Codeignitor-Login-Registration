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
				"name" => "Sajid Ansari",
				"email" => "sajid@gmail.com",
				"phone_no" => "7899654125",
				"role" => "admin",
				"password" => password_hash("12345678", PASSWORD_DEFAULT)
			],
			[
				"name" => "Shazain Akhtar Rehman",
				"email" => "shazain@gmail.com",
				"phone_no" => "8888888888",
				"role" => "editor",
				"password" => password_hash("12345678", PASSWORD_DEFAULT)
			]
		]);
	}
}