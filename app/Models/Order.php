<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomerorder',
        'user_id',
        'status',
        'subtotal',
        'tax',
        'ordertotal',
        'payment',
        'namalengkap',
        'firstname',
        'lastname',
        'email',
        'phone',
        'negara',
        'provinsi',
        'kota',
        'kecamatan',
        'alamat',
        'kodepos',
        'addcatatan',
        'payment_id',
        'payment_method',
        'payment_status',
        'deleted',
    ];

    // Define the relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
