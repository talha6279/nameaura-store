<?php

namespace App\Models;

use App\Models\ReviewModel;
use App\Models\CategoryModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'itemname',
        'detail',
        'price',
        'discounted_price',
        'category_id',
        'description',
        'sku',
        'availability',
        'picture',
        'picture1',
        'picture2',
        'color',
    ];
    protected $primaryKey = "item_id";
    public function category()
{
    return $this->belongsTo(CategoryModel::class, 'category_id');
}
public function reviews()
{
    return $this->hasMany(ReviewModel::class, 'item_id');
}

}
