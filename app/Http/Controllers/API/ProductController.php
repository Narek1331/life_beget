<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Product\Store as ProductStore;

class ProductController extends Controller
{
    /**
     * Get a new ProductService instance.
     *
     * @return void
     */
    public function __construct(ProductService $product_service)
    {
        $this->product_service = $product_service;
    }

    /**
     * Get my products
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $datas = $this->product_service->getProductsByUserId(auth()->user()->id);

        return response()->json([
            'error' => null,
            'status' => true,
            'datas' => $datas
        ],200);
    }

    /**
     * Store products
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ProductStore $request)
    {
        $data = $this->product_service->store(auth()->user()->id,$request->barcode,$request->quantity);

        return response()->json([
            'error' => null,
            'status' => true,
            'data' => $data
        ],201);
    }

}
