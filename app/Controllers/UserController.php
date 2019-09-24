<?php 
namespace LS\Controllers;

use LS\Models\User;

class UserController
{
	/**
	 * Return the list of the users
	 */
	public function index()
	{
		$users = new User;
		return $users->all();
	}
}