<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Join;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class JoinController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Join(), function (Grid $grid) {
            $grid->column('position');
            $grid->column('school');
            $grid->column('people');
            $grid->column('kind');
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
        return Form::make(new Join(), function (Form $form) {
            $form->text('position')->required();
            $form->text('school')->required();
            $form->number('people')->required();
            $form->text('kind')->required();
            $form->editor('spec')->required();
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
