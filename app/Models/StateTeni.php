<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StateTeni
 * 
 * @property int $id
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class StateTeni extends Model
{
	protected $table = 'state_tenis';

	protected $fillable = [
		'name'
	];

	public function orders()
	{
		return $this->hasMany(Order::class, 'state_tenis_id');
	}
}
