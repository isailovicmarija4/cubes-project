<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\ProductCategory;
use App\Models\ProductGroup;

class ProductCategoriesController extends Controller
{
    public function index() {
		
		$productCategories = ProductCategory::orderBy('title')->get();
		
		return view('admin.product-categories.index', [
			'productCategories' => $productCategories
		]);
	}
        public function add() {
            $productCategories = ProductCategory::orderBy('title')->get();
		
		
		return view('admin.product-categories.index', [
			'productCategories' => $productCategories
		]);
        }

	
	public function insert() {
		
		$request = request();
		
		$formData = $request->validate([
			'title' => 'required|string|min:2|max:20',
			'description' => 'present'
		]);
		
		$productCategory = ProductCategory::create($formData);
		
		return redirect()
				->route('admin.product-categories.index')
				->with('systemMessage', 'Product category has been added');
	}
	
	public function edit($id) {
		
		$productCategory = ProductCategory::findOrFail($id);
		
		
		
		return view('admin.product-categories.edit', [
			'productCategory' => $productCategory,
			
		]);
	}
	
	public function update($id) {
		$productCategory = ProductCategory::findOrFail($id);
		
		$request = request();
		
		$formData = $request->validate([
			'title' => 'required|string|min:2|max:20',
			'description' => 'present'
		]);
		
		$productCategory->fill($formData);
		
		$productCategory->save();
		
		return redirect()
				->route('admin.product-categories.index')
				->with('systemMessage', 'Kategorija  je sačuvana');
	}
	
	public function delete() {
		
		$request = request();
		
		$id = $request->input('id');
		
		$productCategory = ProductCategory::findOrFail($id);
		
		//brisanje zapisa iz baze
		
		if ($productCategory->products()->count() > 0) {
			
			return redirect()->back()
					->with('systemError', 'Nemoguće brisanje,jer u kategoriji postoje proizvodi');
		}
		
		$productCategory->delete();
		
		return redirect()
				->route('admin.product-categories.index')
				->with('systemMessage', 'Kategorija proizvoda izbrisana');
	}
}
