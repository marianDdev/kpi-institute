<?php

namespace App\Models;

use App\Events\UserCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $prefix
 * @property string $phone
 * @property string  $country
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'is_admin',
        'first_name',
        'last_name',
        'email',
        'prefix',
        'phone',
        'company',
        'country',
    ];

    protected $dispatchesEvents = [
      'created' => UserCreated::class
    ];

    public function getFullName(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getFullPhoneNumber(): string
    {
        return $this->prefix . $this->phone;
    }
}
