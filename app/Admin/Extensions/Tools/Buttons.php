<?php

namespace App\Admin\Extensions\Tools;

use App\Models\Section;
use Encore\Admin\Grid\Tools\AbstractTool;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\InfoBox;

class Buttons extends AbstractTool
{
    protected $sections = [];

    public function __construct($sections)
    {
        $this->sections = $sections;
    }

    public function render()
    {
//        $row = new Row;
//
//        foreach ($this->sections as $sectionId => $sectionTitle) {
//            $row->column(2, function (Column $column) use($sectionId, $sectionTitle) {
//                $url = route('admin.sliders.index') . "?&section%5Bid%5D={$sectionId}";
////                $column->append(new InfoBox('', 'toggle-right', 'purple', $url, $sectionTitle));
//                $column->append("
//    <a href='$url' class='small-box bg-purple text-center'>
//        <p>$sectionTitle</p>
//    </a>");
//            });
//        }

        $get = $_GET;

        $nowSectionId = 0;
        if (array_key_exists('section', $get) && array_key_exists('id', $get['section'])) $nowSectionId = $get['section']['id'];

        $html = '<div class="mb-2">';

        foreach ($this->sections as $sectionId => $sectionTitle) {
            $url = route('admin.sliders.index') . "?&section%5Bid%5D={$sectionId}";
            $className = 'bg-white text-purple';

            if ($nowSectionId == $sectionId) $className = 'bg-purple';
            $html .= "
                <a href='$url' class='btn  btn-sm $className'>$sectionTitle</a>
            ";
        }
        $html .= '</div><div class="box-footer clearfix"></div>';

        return $html;
    }
}
