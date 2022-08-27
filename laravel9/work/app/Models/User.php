<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
	use HasFactory, SoftDeletes;

	protected $primaryKey = 'id';

	// White list
	protected $fillable = [
		'id',
		'name',
		'email'
	];

	/**
	 * Relations
	 */
	public function articles()
	{
		return $this->hasMany(Article::class);
	}
}
