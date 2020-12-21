<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Logic\Index\Index;

class IndexController extends Controller
{
    public function index()
    {
        $model = new Index();
        echo $model->index();
    }
}
