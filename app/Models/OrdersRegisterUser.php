<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrdersRegisterUser
 * 
 * @property int $id
 * @property int $register_user_id
 * @property int $orders_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Order $order
 * @property NewUser $new_user
 *
 * @package App\Models
 */
class OrdersRegisterUser extends Model
{
	protected $table = 'orders_register_user';

	protected $casts = [
		'register_user_id' => 'int',
		'orders_id' => 'int'
	];

	protected $fillable = [
		'register_user_id',
		'orders_id'
	];

	public function order()
	{
		return $this->belongsTo(Order::class, 'orders_id');
	}

	public function new_user()
	{
		return $this->belongsTo(NewUser::class, 'register_user_id');
	}
}
