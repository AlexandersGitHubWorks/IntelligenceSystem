<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class DocumentationController extends Controller
{
    //
    public function index($section = null)
    {
        return view('documentation', ['section' => $section, 'doc' => Lang::get('documentation')]);
    }
}
