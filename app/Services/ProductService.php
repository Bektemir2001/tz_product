<?php

namespace App\Services;

use App\Models\Product;
use Exception;

class ProductService
{
    public function store(array $data): array
    {
        try {
            $query = Product::query();
            $product = $query->create($data);
            return ['data' => $product, 'status' => 200];
        }
        catch (Exception $exception)
        {
            return ['message' => $exception, 'status' => 500];
        }
    }
}
