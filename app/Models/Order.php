<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id', 'user_id', 'package_id', 'purchase_date',
        'expired_day', 'expired_date', 'payment_method', 'transaction_id',
        'payment_status', 'amount_usd', 'amount_real_currency',
        'currency_type', 'currency_icon', 'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function package()
    {
        return $this->belongsTo(Package::class,'package_id');
    }
}
