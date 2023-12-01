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
            $grid->column('id')->sortable();
            $grid->column('position');
            $grid->column('school');
            $grid->column('people');
            $grid->column('kind');
            $grid->column('spec');
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
        return Show::make($id, new Join(), function (Show $show) {
            $show->field('id');
            $show->field('position');
            $show->field('school');
            $show->field('people');
            $show->field('kind');
            $show->field('spec');
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
        return Form::make(new Join(), function (Form $form) {
            $form->display('id');
            $form->text('position');
            $form->text('school');
            $form->text('people');
            $form->text('kind');
            $form->text('spec');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
