<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Database\Seeders\UserSeeder;

class UserControllerTest extends TestCase
{
	use RefreshDatabase;

	public function test_ok_response()
	{
		$this->seed([UserSeeder::class]);

		$response = $this->get('api/v1/users/1');

		$response->assertStatus(200);
	}

	public function test_not_found_response()
	{
		$this->seed([UserSeeder::class]);

		$response = $this->get('api/v1/users/10000');

		$response->assertStatus(404);
	}
}
