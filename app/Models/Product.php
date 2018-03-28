<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
  
    protected $fillable = [
		'product_category_id',
		'title', 'description', 'photo_filename', 'specification',
		'price', 'quantity', 'on_sale', 'discount'
	];
	
	
	
	public function productCategory() {
		return $this->belongsTo(
			\App\Models\ProductCategory::class,
			'product_category_id'
		);
	}
	
	public function tags() {
		
		return $this->belongsToMany(
			\App\Models\Tag::class,
			'products_tags',
			'product_id',
			'tag_id'
		);
	}
        public function photoUrl(){
            if($this->photo_filename &&  \Storage::disk('public')->exists('/products/' . $this->photo_filename)){
               return \Storage::disk('public')->exists('/products/' . $this->photo_filename);
            }
            return '';
        }
      
}


