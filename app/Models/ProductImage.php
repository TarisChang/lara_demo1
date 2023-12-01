<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'product_images';
    
}
