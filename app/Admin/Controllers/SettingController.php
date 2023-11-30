<?php

namespace App\Admin\Controllers;

use Dcat\Admin\Layout\Content;
use App\Admin\Forms\Setting;
use App\Admin\Forms\Terms;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Widgets\Card;

class SettingController extends AdminController
{
    // index 列表
    public function index(Content $content)
    {
        return $content->header('網站參數') // 標題
            ->description('修改')
            ->body(new Card(new Setting()));
    }

    public function terms(Content $content)
    {
        return $content->header('報名須知') // 標題
            ->description('修改')
            ->body(new Card(new Terms()));
    }
}
