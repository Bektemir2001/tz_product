<?php

namespace App\Services;

use App\Jobs\SendNotificationJob;
use App\Models\Product;
use Exception;

class ProductService
{
    public function store(array $data): array
    {
        try {
            $query = Product::query();
            $product = $query->create($data);
            SendNotificationJob::dispatch($product);
            return ['data' => $product, 'status' => 200];
        }
        catch (Exception $exception)
        {
            return ['message' => $exception, 'status' => 500];
        }
    }

    public function update(array $data, Product $product): array
    {
        try {
            $product->update($data);
            return ['data' => $product, 'status' => 200];
        }
        catch (Exception $exception)
        {
            return ['message' => $exception, 'status' => 500];
        }
    }
}
