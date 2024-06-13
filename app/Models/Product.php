<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * 
 * @property int $id
 * @property string $name
 * @property int $price
 * @property string $state
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Category[] $categories
 *
 * @package App\Models
 */
class Product extends Model
{
	use SoftDeletes;
	protected $table = 'products';

	protected $casts = [
		'price' => 'int'
	];

	protected $fillable = [
		'name',
		'price',
		'state'
	];

	public function categories()
	{
		return $this->belongsToMany(Category::class)
					->withPivot('id')
					->withTimestamps();
	}
}
