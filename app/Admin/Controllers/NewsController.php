<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\News;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class NewsController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new News(), function (Grid $grid) {
            $grid->column('image')->image();
            $grid->column('title');
            $grid->column('news_at');
            $grid->column('updated_at');

            $grid->filter(function (Grid\Filter $filter) {
                $filter->like('title');
                $filter->like('content');
                $filter->between('news_at')->date();
            });

            $grid->model()->orderBy('news_at', 'desc');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new News(), function (Form $form) {
            $form->text('title')->required();
            $form->image('image', '圖片')->accept('jpg,png,gif,jpeg,webp', 'image/*')->autoUpload()->required();
            $form->date('news_at')->required();
            $form->editor('content')->required();

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
