<?php

namespace App\Admin\Extensions\Form;

use Encore\Admin\Admin;
use Encore\Admin\Form\Field;

class SelectSection extends Field
{
    public static $js = [
    ];

    public function script()
    {
        return <<<EOT
        var previous = $('input[name="_previous_"]').val();
        var regex_previous = /&section%5Bid%5D=[0-9]*/;

        console.log(regex_previous.exec(previous));
EOT;
    }

    public function render()
    {
        Admin::script($this->script());
    }
}
