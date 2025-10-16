<?php

namespace App\Models;

use App\Models\ProductModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'picture',
    ];
    protected $primaryKey = "category_id";
    public function products()
{
    return $this->hasMany(ProductModel::class, 'item_id');  // Adjust 'category_id' if necessary
}


}
