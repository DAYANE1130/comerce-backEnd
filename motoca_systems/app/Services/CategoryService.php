<?php

namespace App\Services;

use App\Models\CategoryModel;


class CategoryService
{

    public function getAllCategories()
    {
        return CategoryModel::all();
    }

    public function createCategory(array $data)
    {

        $existingCategory = CategoryModel::where('name', $data['name'])->first();
        if ($existingCategory) {
            throw new \Exception("The category with the name '{$data['name']}' already exists.");
        }
        $category = CategoryModel::create($data);

        return ['name' => $category->name];
    }


    public function getCategoryById($id)
    {
        $category = CategoryModel::find($id);
        if (!$category) {
            throw new \Exception("The category with id '{$id}' no exist.");
        }
        return $category;
    }
    public function updateCategory($id, array $data)
    {
        $existingCategory = $this ->getCategoryById($id);
        $existingCategory->update($data);
        return   ['name' => $existingCategory->name];
    }
    public function deleteCategory($id)
    {
        $existingCategory = $this->getCategoryById($id);
        return   $existingCategory->delete();
    }
}
