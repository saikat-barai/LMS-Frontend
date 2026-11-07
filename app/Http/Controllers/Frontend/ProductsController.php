<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ProductsController extends Controller
{
    public function index(): View
    {
        return view('frontend.product.index');
    }
}
