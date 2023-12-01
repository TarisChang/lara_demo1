<?php

namespace App\Admin\Controllers;

use App\Admin\Forms\About;
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

    public function about(Content $content)
    {
        return $content->header('關於我們') // 標題
            ->description('修改')
            ->body(new Card(new About()));
    }
}
