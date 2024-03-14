<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'id';

    private $fillable = [
        'user_id',
        'price',
        'order_status',
        'order_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
