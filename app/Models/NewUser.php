<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NewUser
 * 
 * @property int $id
 * @property int $identification
 * @property string $fullname
 * @property string $email
 * @property string $address
 * @property Carbon $birthday
 * @property int $phone
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Order[] $orders
 * @property Collection|OrdersRegisterUser[] $orders_register_users
 *
 * @package App\Models
 */
class NewUser extends Model
{
	protected $table = 'new_user';

	protected $casts = [
		'identification' => 'int',
		'phone' => 'int'
	];

	protected $dates = [
		'birthday'
	];

	protected $fillable = [
		'identification',
		'fullname',
		'email',
		'address',
		'birthday',
		'phone'

		
	];


	

	public function orders()
	{
		return $this->hasMany(Order::class, 'register_user_id');
	}

	public function orders_register_users()
	{
		return $this->hasMany(OrdersRegisterUser::class, 'register_user_id');
	}

	public function getUserById($user_id)
    {
      return $this->where("id",$user_id)->with("orders")->first();
    }
}
