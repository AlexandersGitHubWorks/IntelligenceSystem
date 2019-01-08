<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class WarmingUpController extends Controller
{
    //
    public function countdown()
    {
        $lang = [
            'title' => Lang::get('countdown.title'),
            'description' => Lang::get('countdown.description'),
            'button_start' => Lang::get('button.start'),
            'button_more' => Lang::get('button.more'),
        ];
        return view('warming-up.countdown', compact('lang'));
    }

    public function countdownStart()
    {
        $task = Lang::get('countdown.task', [
            'from' => rand(300, 500),
            'to' => rand(100, 200),
            'minus' => rand(2, 5),
        ]);
        $button = Lang::get('button.stop');
        return response()->json(['task' => $task, 'button' => $button]);
    }

    public function __call($name = null, $arguments = null)
    {
        return 'Готовиться к написанию';
    }
}
