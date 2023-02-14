<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use Exception;
use RealRashid\SweetAlert\Facades\Alert;
use RealRashid\SweetAlert\SweetAlertServiceProvider;

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
     * @return Response
     */
    public function index(Request $request)
    {
        try{
            $adminRoute = $this->adminRoute;
            $response = $this->productService->index($request);
            $product = $response->data->get();

            return view($adminRoute.'index',compact(['product'],'adminRoute'));
        } catch (Exception $e){
            alert('Whoops','Data not Found','errors');
            return to_route('admin.home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $adminRoute = $this->adminRoute;
        return view($adminRoute.'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ProductRequest $request)
    {
        try{
            $adminRoute = $this->adminRoute;
            $response= $this->productService->store($request);
            $product = $response->data;

            return to_route($adminRoute.'index',$product)->withSuccess('Data added successfully!');
        } catch (Exception $e){
            alert('Whoops','Data not Found','errors');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  Product  $product
     * @return Response
     */
    public function show(Product $product)
    {
        $adminRoute = $this->adminRoute;
        return view($adminRoute.'show')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Product  $product
     * @return Response
     */
    public function edit($id)
    {
        $adminRoute = $this->adminRoute;
        $product = Product::find($id);
        return view($adminRoute.'edit',\compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Product  $product
     * @return Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        try{
            $adminRoute = $this->adminRoute;
            $this->productService->update($request,$product);

            return to_route($adminRoute.'index')->withSuccess('Data added successfully!');
        } catch (Exception $e){
            alert('error','Your code is Error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Product  $product
     * @return Response
     */
    public function destroy(Product $product)
    {
        try{
        $adminRoute = $this->adminRoute;
        $this->productService->destroy($product);

        return to_route($adminRoute.'index')->withSuccess('Data added successfully!');
    } catch (Exception $e){
        alert('error','Your code is Error');
        return redirect()->back();
    }
}
}