<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'name', 'slug', 'description', 'price', 'stock'];

    // Relasi
    public function category() { return $this->belongsTo(Category::class); }
    public function orderItems() { return $this->hasMany(OrderItem::class); }
    public function carts() { return $this->hasMany(Cart::class); }
    public function reviews() { return $this->hasMany(Review::class); }

    // Requirement: Minimal 1 Local Scope (Filter produk yang stoknya > 0)
    public function scopeInStock($query) {
        return $query->where('stock', '>', 0);
    }
}