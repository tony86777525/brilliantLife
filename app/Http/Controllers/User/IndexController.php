<?php

namespace App\Http\Controllers\User;

use App\Models\Section;
use App\Models\SectionSlider;

class IndexController extends BasicController
{
    public function index()
    {
        $sections = $this->getSections();

        return view('user.index', compact('sections'));
    }

    private function getSections()
    {
        return Section::with('sectionSliders')
            ->where('display', '=', Section::DISPLAY_ON)
            ->get();
    }
}
