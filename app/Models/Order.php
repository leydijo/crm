<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $id
 * @property int $register_user_id
 * @property int $products_id
 * @property int $brands_id
 * @property int $state_tenis_id
 * @property int $orders_id
 * @property string $name
 * @property int $payment
 * @property int $order_number
 * @property string $reference
 * @property Carbon $deliver_date
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Brand $brand
 * @property Order $order
 * @property Product $product
 * @property NewUser $new_user
 * @property StateTeni $state_teni
 * @property Collection|Order[] $orders
 * @property Collection|OrdersRegisterUser[] $orders_register_users
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';

	protected $casts = [
		'register_user_id' => 'int',
		'products_id' => 'int',
		'brands_id' => 'int',
		'state_tenis_id' => 'int',
		'orders_id' => 'int',
		'payment' => 'int',
		'order_number' => 'int'
	];

	protected $dates = [
		'deliver_date'
	];

	protected $fillable = [
		'register_user_id',
		'products_id',
		'brands_id',
		'state_tenis_id',
		'orders_id',
		'name',
		'payment',
		'order_number',
		'reference',
		'deliver_date'
	];

	//public $timestamps = false;
 
	public function brand()
	{
		return $this->belongsTo(Brand::class, 'brands_id');
	}

	public function order()
	{
		return $this->belongsTo(Order::class, 'orders_id');
	}

	public function product()
	{
		return $this->belongsTo(Product::class, 'products_id');
	}

	public function new_user()
	{
		return $this->belongsTo(NewUser::class, 'register_user_id');
	}

	public function state_teni()
	{
		return $this->belongsTo(StateTeni::class, 'state_tenis_id');
	}

	public function orders()
	{
		return $this->hasMany(Order::class, 'orders_id');
	}

	public function orders_register_users()
	{
		return $this->hasMany(OrdersRegisterUser::class, 'orders_id');
	}
}
