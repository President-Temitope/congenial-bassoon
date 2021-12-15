<?php

namespace App;

use App\Notifications\userVerify;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'email', 'password', 'wallet_address', 'cryptocurrency', 'lastname'
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

    /*  public function payments()
      {
          return $this->hasMany(Payment::class);

      }*/

    public function sendEmailVerificationNotification()
    {
        $this->notify(new userVerify($this->fullName()));  //pass the currently logged in user to the notification class
    }

    public function fullName()
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}
