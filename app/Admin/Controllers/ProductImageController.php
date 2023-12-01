<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\ProductImage;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ProductImageController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new ProductImage(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('product_id');
            $grid->column('path');
            $grid->column('order');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new ProductImage(), function (Show $show) {
            $show->field('id');
            $show->field('product_id');
            $show->field('path');
            $show->field('order');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new ProductImage(), function (Form $form) {
            $form->display('id');
            $form->text('product_id');
            $form->text('path');
            $form->text('order');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
