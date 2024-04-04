<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        dd($data);
    }
}
