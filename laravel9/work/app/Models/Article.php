<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
	use HasFactory, SoftDeletes;

	protected $primaryKey = 'id';

	// White list
	protected $fillable = [
		'id',
		'user_id',
		'title',
		'content'
	];

	/** 
	 * Relations
	 */
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
