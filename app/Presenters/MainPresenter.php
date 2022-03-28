<?php

namespace App\Presenters;

use Illuminate\Support\Arr;

class MainPresenter
{
    public function getSectionSliderImage($image)
    {
        return asset("/uploads/$image");
    }
}
