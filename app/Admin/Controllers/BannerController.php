<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Banner;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class BannerController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Banner(), function (Grid $grid) {
            $grid->column('image')->image();
            $grid->column('alt');
            $grid->column('created_at');
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
        return Form::make(new Banner(), function (Form $form) {
            $form->image('image', '圖片')->accept('jpg,png,gif,jpeg,webp', 'image/*')->autoUpload()->required();
            $form->text('alt')->required();
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
