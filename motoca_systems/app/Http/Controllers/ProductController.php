<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{
    private $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $responseService = $this->productService->getAllProducts();
        return response()->json($responseService);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        try {
            $responseService = $this->productService->createProduct($request->all());
            return response()->json($responseService, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $responseService = $this->productService->getProductById($id);
            return response()->json($responseService);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
        try {
            $responseService =  $this->productService->updateProduct($id, $request->all());
            return response()->json($responseService);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->productService->deleteProduct($id);
            return response()->json(['message' => 'Product deleted sucessfull']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
