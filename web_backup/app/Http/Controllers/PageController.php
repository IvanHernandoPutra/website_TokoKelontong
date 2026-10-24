<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home', [
            'categories' => Category::withCount('products')->get(),
            'featured' => Product::where('is_featured', true)->where('is_active', true)->take(8)->get(),
        ]);
    }

    public function products(Request $request)
    {
        $query = Product::with('category')->where('is_active', true);

        if ($slug = $request->query('kategori')) {
            $query->whereHas('category', fn ($q) => $q->where('slug', $slug));
        }
        if ($search = $request->query('cari')) {
            $query->where('name', 'like', "%{$search}%");
        }
        match ($request->query('urutkan')) {
            'harga-rendah' => $query->orderBy('price_idr'),
            'harga-tinggi' => $query->orderByDesc('price_idr'),
            'terbaru' => $query->latest(),
            default => $query->orderByDesc('ci_frequency'),
        };

        return view('products', [
            'products' => $query->paginate(12)->withQueryString(),
            'categories' => Category::withCount(['products' => fn ($q) => $q->where('is_active', true)])->get(),
        ]);
    }

    public function productDetail(Product $product)
    {
        abort_unless($product->is_active, 404);
        return view('product-detail', [
            'product' => $product->load('category'),
            'related' => Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->where('is_active', true)->take(4)->get(),
        ]);
    }

    public function about() { return view('about'); }

    public function stores()
    {
        return view('stores', ['stores' => Store::all()]);
    }

    public function shipping() { return view('shipping'); }

    public function faq() { return view('faq'); }

    public function contact() { return view('contact'); }
}
