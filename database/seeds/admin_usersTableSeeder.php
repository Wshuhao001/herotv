<?php


class admin_usersTableSeeder extends Seeder {
	public function run()
	{
		User::create([
		'email'    => 'admin@wangyusong.com',
		'username' => 'wangyusong',
		'password' => Hash::make('woaini521'),
		'nickname' => '王玉松',
		'groupid' => 1,
		]);
	}
}