@extends('layouts.main')

@section('content')
    <div class="container">
        <ul class="list-group">
            <li class="list-group-item">
                <div id="general" class="mb-4">
                    <h4>{{ $doc['general']['title'] }}</h4>
                    <div>{{ $doc['general']['content'] }}</div>
                </div>
            </li>
            <li class="list-group-item">
                <div id="countdown" class="mb-4">
                    <h4>{{ $doc['countdown']['title'] }}</h4>
                    <div>{{ $doc['countdown']['content'] }}</div>
                </div>
            </li>
        </ul>
    </div>
@stop