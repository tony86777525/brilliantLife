<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Presenters\MainPresenter;

class BasicController extends Controller
{
    public function __construct()
    {

    }

    public function mainPresenter() : MainPresenter
    {
        return resolve(MainPresenter::class);
    }
}
