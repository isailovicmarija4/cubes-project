<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductCategory;

class ProductsController extends Controller
{
public function allProducts() {
		
		$products = Product::orderBy('created_at', 'desc')->paginate(6);
		
		return view('front.products.index', [
			'products' => $products
		]);
	}
        public function cProducts(){
            $products = Product::orderBy('created_at', 'desc')->paginate(6);
            for($i=0;$i<=$products->paginate(6);$i++){
             return  $products+=$products->count();
             $i++;
            }
        }
	
	public function onSale() {
		
	}
	
	public function category($id) {
		
		$productCategory = ProductCategory::findOrFail($id);
		
	
		$products = $productCategory->products()->paginate(6);
		
		return view('front.products.category', [
			'productCategory' => $productCategory,
			'products' => $products
		]);
	}
	
	public function oneProduct($id) {
		
		$product = Product::findOrFail($id);
		
		return view('front.products.product', [
			'product' => $product
		]);
	}
       
}
