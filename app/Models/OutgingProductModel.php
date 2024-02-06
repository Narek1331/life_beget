<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutgingProductModel extends Model
{
    use HasFactory;

    /**
     * table name
     *
     */
    protected $table = 'outging_products';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'quantity',
        'barcode',
        'user_id',
    ];
}
