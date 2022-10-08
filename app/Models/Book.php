<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Author;
use App\Models\Cart;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'cover',
        'price', 
        'pages_num',
        'publisher_name',
        'publisher_date',
        'description', 
        'author_name', 
        'stock'
        
    ];

    /**
     * One-To-Many relationship
     * 
     * This is Many
     * 
     */
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    /**
     * One-To-Many relationship
     * 
     * This is One
     * 
     */
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
    
}
