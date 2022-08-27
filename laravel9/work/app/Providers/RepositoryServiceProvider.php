<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\User\UserInterface;
use App\Repositories\User\UserRepository;

class RepositoryServiceProvider extends ServiceProvider
{
	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(UserInterface::class, UserRepository::class);
	}

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}
}
