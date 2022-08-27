<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\User\UserInterface;

class UserRepository implements UserInterface
{
	public function getUser($id)
	{
		return User::findOrFail($id);
	}
}
