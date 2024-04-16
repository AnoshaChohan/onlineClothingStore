<?php

namespace App\Models;
use App\Models\Product;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
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

     

    public function viewedProducts()
    {
        return $this->belongsToMany(Product::class, 'viewed_products');
    }

    /**
     * Track a viewed product for the user.
     *
     * @param int $productId
     * @return void
     */
   

     public function cart()
     {
         return $this->hasOne(Cart::class);
     }

     public function shippingAddresses()
    {
        return $this->hasMany(ShippingAddress::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
     

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin', // Make sure this is included in the fillable array

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
    protected $guarded = [];


    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'is_admin' => 'boolean', // Ensure it's cast to boolean

    ];
}
