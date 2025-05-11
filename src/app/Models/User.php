<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'role',
        'postal_code',
        'address',
        'building_name',
        'user_picture',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function productContents()
    {
        return $this->hasMany("App\Models\ProductContent");
    }

    public function productComments()
    {
        return $this->hasMany("App\Models\ProductComment");
    }

    public function exhibitedProducts()
    {
        return $this->hasMany("App\Models\ExhibitedProduct");
    }

    public function purchasedProducts()
    {
        return $this->hasMany("App\Models\PurchasedProduct");
    }
}
