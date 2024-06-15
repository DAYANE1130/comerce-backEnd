<?php

namespace App\Services;

use App\Models\ProductModel;


class ProductService
{

  public function getAllProducts()
  {
    return ProductModel::all();
  }

  public function createProduct(array $data)
  {
    $product = ProductModel::create($data);
    $product->makeHidden(['created_at', 'updated_at']);
    return  $product;
  }

  public function getProductById($id)
  {
    $product = ProductModel::find($id);
    if (!$product) {
      throw new \Exception("The product with id '{$id}' no exist.");
    }
    return $product;
  }
  public function updateProduct($id, array $data)
  {
    $existingProduct = $this->getProductById($id);
    $existingProduct->update($data);
    $updatedProduct = $existingProduct->makeHidden(['created_at', 'updated_at']);
    return   $updatedProduct;
  }

  public function deleteProduct($id)
  {
    $existingCategory = $this->getProductById($id);
    return   $existingCategory->delete();
  }
}
