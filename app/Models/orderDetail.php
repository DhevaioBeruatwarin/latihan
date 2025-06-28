<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class orderDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_id',
        'book_id',
        'quantitiy',
        'price',
        'subtotal'

    ];

    public function oder()
    {
        return $this->belongsTo(oder::class);
    }
    public function book()
    {
        return $this->belongsTo(book::class);
    }
}
