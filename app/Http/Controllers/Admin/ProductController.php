<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Mengambil data produk, dibatasi 10 per halaman agar rapi (Pagination)
        $products = Product::paginate(10);
        
        // Melempar data ke tampilan view
        return view('admin.dashboard', compact('products'));
    }
}