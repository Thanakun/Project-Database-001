<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Book;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'price', 
        'quantity', 
        'image',
        'owner_id'
    ];

    /**
     * One-To-Many relationship
     * 
     * This is Many
     * 
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * One-To-Many relationship
     * 
     * This is Many
     * 
     */
    public function book(){
        return $this->belongsTo(Book::class);
    }

}
