<?php

use App\Models\Product;

use function Pest\Laravel\getJson;



it('get all product', function () {
    getJson(route('product.index'))
        ->assertStatus(200);
});