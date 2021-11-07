<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		User::create([
			'name' => 'Ângelo Hideki Noda',
			'email' => 'angelonoda@gmail.com',
			'password' => bcrypt('123456'),
		]);
	}
}
