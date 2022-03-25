<?php

namespace App\Admin\Extensions\Form;

use Encore\Admin\Form\Field;

class CKEditorText extends Field
{
    public static $js = [
        '/packages/ckeditor/ckeditor.js',
        '/packages/ckeditor/adapters/jquery.js',
    ];

    protected $view = 'admin.ckeditor';

    public function render()
    {
        $this->script = "$(function () { CKEDITOR.replace('{$this->column}', 
            {
                toolbar:[
                    { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source' ] },
                    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Underline', 'Strike', '-', 'RemoveFormat' ] },
                    { name: 'colors', items: [ 'TextColor', 'BGColor' , 'JustifyCenter' ] },
                    { name: 'styles', items: [ 'FontSize' ] },
                    { name: 'links', items: [ 'Link', 'Unlink' ] },
                    { name: 'custom', items : [ 'DevicePreview' ] }
                ]
            }
        ); });";

        return parent::render();
    }
}
