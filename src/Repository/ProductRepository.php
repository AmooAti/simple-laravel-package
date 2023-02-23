<?php

namespace Amooati\ECommerce\Repository;

use Amooati\ECommerce\Models\Product;

class ProductRepository
{
    public function create(array $data)
    {
        return Product::create($data);
    }
}
