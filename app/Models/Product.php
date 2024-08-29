<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = true;
    protected $table = 'Product';
    protected $guarded = ['id'];
    protected $fillable = [
        'NamaProduct',
        'Jenis',
        'Kadaluarsa',
        'Jumlah'
    ];
}
