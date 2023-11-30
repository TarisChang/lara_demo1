<?php

namespace App\Admin\Forms;

use Dcat\Admin\Widgets\Form;

class Setting extends Form
{
    /**
     * Handle the form request.
     *
     * @param array $input
     *
     * @return mixed
     */
    public function handle(array $input)
    {
        // return $this->response()->error('Your error message.');

        admin_setting($input);

        return $this
            ->response()
            ->success('修改成功')
            ->refresh();
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        $this->confirm('確定修改？');
        $this->text('name', '公司名稱')->default(admin_setting('name', 'xxx公司'));
        $this->image('logo', '網站Logo')->accept('jpg,png,gif,jpeg,webp', 'image/*')->maxSize(500)->autoUpload()->help('不可超過500KB')->default(admin_setting('logo', ''))->required();
        $this->text('address', '地址')->default(admin_setting('address', '台北市'));
        $this->text('tel', '電話')->default(admin_setting('tel', '0800-000-000'));
        $this->text('email', '信箱')->default(admin_setting('email', 'example@gmail.com'));
        $this->url('line', 'LINE')->default(admin_setting('line', 'https://line.me/ti/p/~@account'));
        $this->url('fb', 'Facebook')->default(admin_setting('fb', 'https://www.facebook.com/account'));
        $this->url('ig', 'IG')->default(admin_setting('ig', 'https://www.instagram.com/account/'));

        $this->disableResetButton();
    }

    /**
     * The data of the form.
     *
     * @return array
     */
    public function default()
    {
        return [
            // 'name'  => 'John Doe',
            // 'email' => 'John.Doe@gmail.com',
        ];
    }
}
