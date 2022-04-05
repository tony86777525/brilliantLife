<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Section;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\InfoBox;

use Encore\Admin\Admin;

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
                        $url = route('admin.user.sliders.index') . "?&section%5Bid%5D={$sectionId}";
                        $column->append(new InfoBox('', 'toggle-right', 'purple', $url, $sectionTitle));
                    });
                }
            })
            ->row('<hr>')
            ->row(function (Row $row) {
//                $posts = Post::all()->count();
//                Admin::style('.small-box.bg-green:after{content: "' . $posts . '";position: absolute;top: 0%;left: 100%;transform: translate(-50%,-50%);font-weight: bold;font-size: 20px;}
//                .small-box.bg-green:before{content: "";position: absolute;top: 0%;left: 100%;transform: translate(-50%,-50%);background-color: red;width: 40px;height: 40px;border-radius: 50%;}
//                ');

                $row->column(3, function (Column $column) {
                    $url = route('admin.user.posts.index');
                    $column->append(new InfoBox('', 'commenting-o', 'green', $url, '預約鑑賞'));
                });
            });;
    }
}
