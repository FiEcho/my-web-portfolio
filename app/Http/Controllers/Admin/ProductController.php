<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    public string $adminRoute = 'admin.product.';
    private ProductService $productService;

    public function __construct()
    {
        $this->middleware('auth');
        $this->productService = new ProductService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $adminRoute = $this->adminRoute;
        $response = $this->productService->index($request);
        $product = $response->data->get();
        return view($adminRoute.'index',compact(['product'],'adminRoute'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $adminRoute = $this->adminRoute;
        return view($adminRoute.'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $adminRoute = $this->adminRoute;
        $product = $this->productService->store($request);
        return \to_route($adminRoute.'index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $adminRoute = $this->adminRoute;
        return \view($adminRoute.'show')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adminRoute = $this->adminRoute;
        $product = Product::find($id);
        return \view($adminRoute.'edit',\compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $adminRoute = $this->adminRoute;
        $p = $this->productService->update($request,$product);
        return \to_route($adminRoute.'index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $adminRoute = $this->adminRoute;
        $p = $this->productService->destroy($product);
        return \to_route($adminRoute.'index');
    }
}
