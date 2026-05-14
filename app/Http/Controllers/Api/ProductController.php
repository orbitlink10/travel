<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    /**
     * Get all active products with optional filters
     */
    public function index(): AnonymousResourceCollection
    {
        $query = Product::active();

        // Filter by type
        if (request('type')) {
            $query->where('type', request('type'));
        }

        // Filter by location
        if (request('location')) {
            $query->where('location', 'like', '%' . request('location') . '%');
        }

        // Search by name
        if (request('search')) {
            $query->where('name', 'like', '%' . request('search') . '%');
        }

        $products = $query->latest()->paginate(15);

        return ProductResource::collection($products);
    }

    /**
     * Get a specific product
     */
    public function show(Product $product): JsonResponse
    {
        if (!$product->is_active) {
            return response()->json([
                'success' => false,
                'message' => 'Product not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => new ProductResource($product),
        ]);
    }

    /**
     * Get products by type
     */
    public function byType(string $type): AnonymousResourceCollection
    {
        $products = Product::byType($type)->active()->latest()->paginate(15);

        return ProductResource::collection($products);
    }

    /**
     * Get products by location
     */
    public function byLocation(string $location): AnonymousResourceCollection
    {
        $products = Product::byLocation($location)->active()->latest()->paginate(15);

        return ProductResource::collection($products);
    }
}
