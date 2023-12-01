<?php

namespace App\Admin\Repositories;

use App\Models\ProductImage as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class ProductImage extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
