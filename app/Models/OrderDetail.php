<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomerorder',
        'course_id',
        'price',
        'qty',
        'subtotal',
        'note',
        'review',
        'status',
        'deleted',
    ];

    // Define the relationships
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

       // Define the inverse relationship with Order
       public function order()
       {
           return $this->belongsTo(Order::class, 'nomerorder', 'nomerorder');
       }
}
