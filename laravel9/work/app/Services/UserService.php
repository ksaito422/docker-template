<?php

namespace App\Services;

use App\Repositories\User\UserInterface;

class UserService
{
	private UserInterface $userRepository;

	public function __construct(UserInterface $userRepository)
	{
		$this->userRepository = $userRepository;
	}

	public function getUser($userId)
	{
		return $this->userRepository->getUser($userId);
	}
}
