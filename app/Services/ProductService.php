<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\Log;

class ProductService extends BaseService
{
    private $product;
    private ?string $gambarBaru = null;
    private ?string $gambarLama = null;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function index(Request $request):object
    {
        try{
            $product = $this->product->query()->orderBy('nama');

            return $this->response(true,'selamat anda berhasil',$product);
        } catch (Exception $e){
            Log::emergency($e->getMessage());
        }
    }

    public function store(ProductRequest $request) : Product
    {
        DB::begintransaction();
        try{
            $data = $request->validated();

            if ($request->hasFile('gambar')) {
                $this->gambarBaru = $request->file('gambar')->store('img', 'public');
                $data['gambar'] = $this->gambarBaru;
            }
            $product = $this->product->create($data);
            DB::commit();

            return $product;
        } catch (Exception $e){
            DB::rollBack();
            Log::emergency($e->getMessage());
        }
    }

    public function update(ProductRequest $request,Product $product): Product
    {
        DB::beginTransaction();
        try{
            $data = $request->validated();
            if ($request->hasFile('gambar')) {
                $this->gambarLama = $product->gambar;
                $this->gambarBaru = $request->file('gambar')->store('img', 'public');
                $data['gambar'] = $this->gambarBaru;
            }

            $product->update($data);
            DB::commit();
            DB::afterCommit(function(){
                Storage::disk('public')->delete($this->gambarLama);
            });

            return $product;
        }catch (Exception $e){
            DB::rollBack();
            Log::emergency($e->getMessage());
        }
    }

    public function destroy(Product $product)
    {
        DB::beginTransaction();
        try{
            $this->gambarLama = $product->gambar;
            $product->delete();
            DB::commit();
            DB::afterCommit(function(){
                if(! empty($this->gambarLama) && (Storage::disk('public'))->exists($this->gambarLama)){
                    Storage::disk('public')->delete($this->gambarLama);
                }
            });

            return $product;
        }catch (Exception $e){
            DB::rollBack();
            Log::emergency($e->getMessage());
        }
    }
}