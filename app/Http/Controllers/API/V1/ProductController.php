<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Models\Product;



class ProductController extends Controller
{
    private ProductService $productService;

    public function __construct()
    {
        $this->productService = new ProductService;
    }

    public function index(Request $request)
    {
            $product = $this->productService->index($request);
            $data = $product
            ->data
            ->paginate(10);

            return responder()
                ->success($data)
                ->respond();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return \responder()
            ->success($product)
            ->respond();
    }
}
