<?php

namespace App\Admin\Repositories;

use App\Models\Join as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Join extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
