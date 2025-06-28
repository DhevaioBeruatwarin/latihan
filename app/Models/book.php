<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class book extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'author',
        'price',
        'description',
        'image',
        'category_id'

    ];

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function orderDetail()
    {
        return $this->hasMany(orderDetail::class);
    }
}
