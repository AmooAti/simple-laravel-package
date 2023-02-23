<?php

namespace Amooati\ECommerce\Http\Controllers;

use Amooati\ECommerce\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('amooati-ecommerce::product', ['products' => Product::all()]);
    }
}
