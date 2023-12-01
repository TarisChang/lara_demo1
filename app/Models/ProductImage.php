<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model implements Sortable
{
    use HasDateTimeFormatter;
    use SortableTrait;

    protected $table = 'product_images';

    protected $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];
}
