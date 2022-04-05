<?php

namespace App\Admin\Controllers\Bl;

use App\Admin\Extensions\Tools\Buttons;
use App\Models\Section;
use App\Models\SectionSlider;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Widgets\Table;


class SectionSliderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SectionSlider';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $get = $_GET;

        $sectionId = 0;
        if (array_key_exists('section', $get) && array_key_exists('id', $get['section'])) $sectionId = $get['section']['id'];

        $grid = new Grid(new SectionSlider());

        if (!empty($sectionId)) $grid->model()->where('section_id', $sectionId);

        $grid->sortable();

        $grid->column('id', __('Id'));
        $grid->column('section.title', __('Section'));
        $grid->column('image', __('Image'))->modal(__('Image'), function () {
            return new Table([$this->alt], [[$this->show_image]]);
        });
        $grid->column('alt', __('Alt'));
//        $grid->column('order', __('Order'));
        $grid->column('display', __('Display'))->switch();
//        $grid->column('created_at', __('Created at'));
//        $grid->column('updated_at', __('Updated at'));

        $grid->filter(function($filter){
            $filter->disableIdFilter();

//            $filter->equal('section.id', __('Section'))->select(Section::all()->pluck('title', 'id'));

            $filter->equal('display', __('display'))->radio([
                ''   => 'All',
                0    => 'OFF',
                1    => 'ON',
            ]);
        });

//        $grid->actions(function($actions){
//            $actions->disableView();
//        });

//        $sections = Section::all()->pluck('title', 'id');
//        $grid->tools(function (Grid\Tools $tools) use ($sections) {
//            $tools->prepend(new Buttons($sections));
//        });

//        $grid->disableActions();
        $grid->disableBatchActions();
        $grid->disableCreateButton();
        $grid->disableExport();
        $grid->disableColumnSelector();
        $grid->disablePagination();

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(SectionSlider::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('alt', __('Alt'))->unescape();
//        $show->field('order', __('Order'));
        $show->field('display', __('Display'))->using(
            [
                '0' => 'OFF',
                '1' => 'ON',
            ]
        );;
//        $show->field('created_at', __('Created at'));
//        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new SectionSlider());

        $form->select('section_id', __('Section'))->options(Section::all()->pluck('title', 'id'));
        $form->image('image', __('Image'));
        $form->text('alt', __('Alt'));
//        $form->number('order', __('Order'));
        $form->switch('display', __('Display'));

        $form->tools(function (Form\Tools $tools) {
            $tools->disableList();
            $tools->disableDelete();
            $tools->disableView();
        });
        $form->disableEditingCheck();
        $form->disableViewCheck();
        $form->disableCreatingCheck();
        $form->footer(function ($footer) {
            $footer->disableReset();
        });

//        (new SelectSection())->render();

        return $form;
    }
}
