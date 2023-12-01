<?php

namespace App\Admin\Controllers;

use App\Models\Cases;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;

class CaseController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Cases(), function (Grid $grid) {
            $grid->column('image')->image();
            $grid->column('title');
            $grid->column('updated_at')->sortable();
    
            $grid->model()->orderBy('order');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Cases(), function (Form $form) {
            $form->image('image')->accept('jpg,png,gif,jpeg,webp', 'image/*')->autoUpload()->required();
            $form->text('title')->required();
            $form->editor('desc')->required();
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
