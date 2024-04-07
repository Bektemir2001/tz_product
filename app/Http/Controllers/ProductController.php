<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function store(StoreRequest $request): Response
    {
        $data = $request->validated();
        $result = $this->productService->store($data);

        return response($result)->setStatusCode($result['status']);
    }

    public function update(UpdateRequest $request, Product $product): Response
    {
        $data = $request->validated();
        if(!auth()->user()->canEditArticle())
        {
            unset($data['article']);
        }
        $result = $this->productService->update($data, $product);
        return response($result)->setStatusCode($result['status']);
    }

    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();
        return back();
    }
}
