<?php

namespace App\Http\Controllers\User;

use App\Models\Post;
use App\Models\Section;

class IndexController extends BasicController
{
    public function index()
    {
        $this->mainPresenter()->setPostFormGender(Post::GENDER_OPTIONS);
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
