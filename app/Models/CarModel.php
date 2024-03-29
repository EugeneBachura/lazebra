<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;
    protected $casts = [
        'options' => 'array',
    ];

    public function brand()
    {
        return $this->belongsTo('App\Models\Brands', 'brand_id');
    }
}
