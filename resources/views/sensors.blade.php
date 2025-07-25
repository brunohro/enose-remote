@extends('page')

@section('specific-styles')
@vite('resources/css/sensors.css')
@endsection

@section('content')

<div class="card" id="mq2">
    <div class="card-header">
        <h2 id="name-sensor">MQ2</h2>
    </div>
    <div class="sensor-footer">
        <div id="chart-mq2"></div>
    </div>
</div>

<div class="card" id="mq3">
    <div class="card-header">
        <h2 id="name-sensor">MQ3</h2>
    </div>
    <div class="sensor-footer">
        <div id="chart-mq3"></div>
    </div>
</div>

<div class="card" id="mq5">
    <div class="card-header">
        <h2 id="name-sensor">MQ5</h2>
    </div>
    <div class="sensor-footer">
        <div id="chart-mq5"></div>
    </div>
</div>

<div class="card" id="mq8">
    <div class="card-header">
        <h2 id="name-sensor">MQ8</h2>
    </div>
    <div class="sensor-footer">
        <div id="chart-mq8"></div>
    </div>
</div>

<div class="card" id="mq135">
    <div class="card-header">
        <h2 id="name-sensor">MQ135</h2>
    </div>
    <div class="sensor-footer">
        <div id="chart-mq135"></div>
    </div>
</div>
@endsection

@section('specific-scripts')
@vite('resources/js/sensors-chart.js')
@endsection