<?php

namespace App\Admin\Forms;

use Dcat\Admin\Widgets\Form;

class About extends Form
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
        $this->editor('about', '企業簡介')->default(admin_setting('about'));
        $this->editor('history', '發展歷程')->default(admin_setting('history'));
        $this->editor('culture', '企業文化')->default(admin_setting('culture'));
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
