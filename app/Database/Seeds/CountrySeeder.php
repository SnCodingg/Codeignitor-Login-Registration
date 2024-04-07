<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\CountryModel;

class CountrySeeder extends Seeder
{
	public function run()
	{
		$json = file_get_contents("data/countries-data.json");
		$countries = json_decode($json);

		foreach ($countries->countries as $key => $value) {
			$object = new CountryModel;
			$object->insert([
				"sortname" => $value->sortname,
                "name" => $value->name,
                "phonecode" => $value->phoneCode
			]);
		}
	}
}