@extends('page')

@section('specific-styles')
    @vite('resources/css/sensors.css')
@endsection

@section('content')

    @if($sensors->isEmpty())
        <div class="alert alert-warning">Nenhum dado encontrado.</div>
    @else
        <table class="table table-striped table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>MQ2 (%)</th>
                    <th>MQ3 (%)</th>
                    <th>MQ5 (%)</th>
                    <th>MQ8 (%)</th>
                    <th>MQ135 (%)</th>
                    <th>Criado em</th>
                    <th>Atualizado em</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sensors as $sensor)
                    <tr>
                        <td>{{ $sensor->id }}</td>
                        <td>{{ number_format($sensor->percent_mq2 ?? 0, 2, ',', '.') }}</td>
                        <td>{{ number_format($sensor->percent_mq3 ?? 0, 2, ',', '.') }}</td>
                        <td>{{ number_format($sensor->percent_mq5 ?? 0, 2, ',', '.') }}</td>
                        <td>{{ number_format($sensor->percent_mq8 ?? 0, 2, ',', '.') }}</td>
                        <td>{{ number_format($sensor->percent_mq135 ?? 0, 2, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    {{-- <div class="card" id="mq3">
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
    </div> --}}
@endsection

@section('specific-scripts')
    @vite('resources/js/sensors-chart.js')
@endsection
