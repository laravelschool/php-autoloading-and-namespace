<?php 
namespace LS\Models;

class User
{
	public function all()
	{
		return [
			[
				'name' => 'user1',
				'email' => 'user1@gmail.com',
			],
			[
				'name' => 'user2',
				'email' => 'user2@gmail.com',
			]
		];
	}
}