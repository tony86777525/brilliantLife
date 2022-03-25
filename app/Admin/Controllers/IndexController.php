<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\InfoBox;

class IndexController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('定泰翫花同')
            ->description('BRILLIANT LIFE')
            ->row(function (Row $row) {

                $sections = Section::all()->pluck('title', 'id');
                foreach ($sections as $sectionId => $sectionTitle) {
                    $row->column(3, function (Column $column) use($sectionId, $sectionTitle) {
                        $url = route('admin.sliders.index') . "?&section%5Bid%5D={$sectionId}";
                        $column->append(new InfoBox('', 'toggle-right', 'purple', $url, $sectionTitle));
                    });
                }
            });
    }
}
