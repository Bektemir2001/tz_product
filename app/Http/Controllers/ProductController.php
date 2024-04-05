<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Services\ProductService;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function store(ProductRequest $request): Response
    {
        $data = $request->validated();
        $result = $this->productService->store($data);
        return response($result)->setStatusCode($result['status']);
    }
}
