<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Contact;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ContactController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Contact(), function (Grid $grid) {
            $grid->column('name');
            $grid->column('phone');
            $grid->column('email');
            $grid->column('content');
            $grid->column('note');
            $grid->column('company');
            $grid->column('created_at');

            $grid->model()->orderBy('created_at', 'desc');

            $grid->disableCreateButton();
            $grid->disableEditButton();
            $grid->disableDeleteButton();
            $grid->showViewButton();
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
        return Show::make($id, new Contact(), function (Show $show) {
            $show->field('name');
            $show->field('phone');
            $show->field('email');
            $show->field('content');
            $show->field('note');
            $show->field('company');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    protected function form()
    {
        return Form::make(new Contact(), function (Form $form) {
            $form->text('name')->required();
            $form->text('name');
            $form->text('phone');
            $form->text('email');
            $form->text('content');
            $form->text('note');
        });
    }
}
