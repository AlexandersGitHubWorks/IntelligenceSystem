<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttentionController extends Controller
{
    //

    public function __call($name = null, $arguments = null)
    {
        return 'Готовиться к написанию';
    }
}
