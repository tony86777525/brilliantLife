<?php

namespace App\Presenters;

class MainPresenter
{
    protected $postFormGender;

    public function getSectionSliderImage($image)
    {
        return asset("/uploads/$image");
    }

    public function setPostFormGender($postFormGender)
    {
        $this->postFormGender = $postFormGender;
    }

    public function getPostFormGender()
    {
        return $this->postFormGender;
    }
}
