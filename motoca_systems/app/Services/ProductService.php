<?php

namespace App\Services;

use App\Models\ProductModel;


class ProductService
{

  public function getAllProducts()
  {
    return ProductModel::all();
  }

  public function getProductById($id)
  {
      $category = ProductModel::find($id);
      if (!$category) {
          throw new \Exception("The product with id '{$id}' no exist.");
      }
      return $category;
  }
}
