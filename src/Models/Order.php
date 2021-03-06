<?php

namespace Erkurn\LaravelOrder\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    public $guarded = [];

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
