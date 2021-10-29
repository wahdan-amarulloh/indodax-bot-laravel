<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders';

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type', 'status', 'amount', 'coin', 'user_id', 'price_buy', 'price_sell', 'profit', 'indodax_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
