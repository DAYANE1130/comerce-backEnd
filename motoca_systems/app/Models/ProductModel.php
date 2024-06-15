<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'category_id'];
    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo(CategoryModel::class);
    }
}
