@extends('layouts.main')

@section('content')
    <div class="container">
        <h3>{{ $lang['title'] }}</h3>
        <div class="mb-3">{{ $lang['description'] }}</div>
        <div id="task_content"></div>
        <div class="mt-3">
            <button class="start btn btn-success">{{ $lang['button_start'] }}</button>
        </div>
        <div class="mt-3">
            <a href="{{ route('documentation', ['section' => '#countdown']) }}" class="btn btn-primary"
               target="_blank">{{ $lang['button_more'] }}</a>
        </div>
    </div>
@stop