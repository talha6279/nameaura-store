<?php

namespace App\Models;

use App\Models\ProductModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReviewModel extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'item_id',
        'rating',
        'review',
    ];
    protected $primaryKey = "review_id";
    public function products()
    {
        return $this->belongsTo(ProductModel::class, 'item_id');
    }
}
