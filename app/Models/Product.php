<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

use Illuminate\Database\Eloquent\Model;

class Product extends Model implements Sortable
{
	use HasDateTimeFormatter;
	use SortableTrait;

	protected $sortable = [
		'order_column_name' => 'order',
		'sort_when_creating' => true,
	];

	public function category()
	{
		return $this->belongsTo(ProductCategory::class, 'product_category_id');
	}

	public function images()
	{
		return $this->hasMany(ProductImage::class);
	}
}
