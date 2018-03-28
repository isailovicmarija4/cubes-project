<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{

 protected $table = 'product_categories';
	
	protected $fillable = ['title', 'description'];
	
	
	
	public function products() {
		return $this->hasMany(\App\Models\Product::class, 'product_category_id');
	}
}
