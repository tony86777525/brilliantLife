<?php

namespace App\Admin\Extensions\Tools;

use Encore\Admin\Admin;
use Encore\Admin\Grid\Tools\AbstractTool;

class Calendar extends AbstractTool
{
    protected $curriculums;

    public function render()
    {
        \Encore\Admin\Facades\Admin::disablePjax();
        return <<<EOT
<div class="btn-group pull-right" style="margin-right:10px" data-toggle="modal" data-target="#calendarModal">
    <span class="btn btn-sm btn-danger drop-button">預覽</span>
</div>
EOT;
    }
}
