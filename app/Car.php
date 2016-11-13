<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $primaryKey = 'vin';
    public $incrementing = false;

    protected $fillable = [
        'vin', 'year', 'make', 'model', 'saleStatus'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
