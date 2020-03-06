<?php

namespace App\Models;
use App\Models\Task;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
 * Set and encrypt the password attribute.
 *
 * @param $value
 */
public function setPasswordAttribute($value)
{
    $this->attributes['password'] = bcrypt($value);
}


 /* The relationship to the user's tasks.
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function tasks()
{
    return $this->hasMany(Task::class);
}

}
