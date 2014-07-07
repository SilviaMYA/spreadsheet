<?php

class UserTableSeeder extends Seeder {

	public function run() {
		DB::table('users')->delete();
		User::create(array(
				'firstname' => 'Nathanael',
				'lastname'  => 'Smith',
				'username'  => 'nsmith7989',
				'email'     => 'nathanael@gorocketfuel.com',
				'password'  => Hash::make('alfa5465')
			));
		User::create(array(
				'firstname' => 'IndiAna',
				'lastname'  => 'Gowland',
				'username'  => 'igowland',
				'email'     => 'indiana.gowland@gmail.com',
				'password'  => Hash::make('hollyboo')
			));

	}

}