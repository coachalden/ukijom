<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Product;
 
use Illuminate\Database\Eloquent\Casts\Attribute;
 
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
        'password',
        'type'
    ];

    public function product()
    {
        return $this->hasOne(Product::class, 'product_id', 'id');
    }
 
    protected function type(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["user", "admin"][$value],
        );
    }
}