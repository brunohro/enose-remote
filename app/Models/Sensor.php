<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;

    // Quais campos podem ser preenchidos via mass assignment
    protected $fillable = [
        'percent_mq2',
        'percent_mq3',
        'percent_mq5',
        'percent_mq8',
        'percent_mq135',
    ];

    // Definindo os casts para garantir o tipo float nos atributos
    protected $casts = [
        'percent_mq2' => 'float',
        'percent_mq3' => 'float',
        'percent_mq5' => 'float',
        'percent_mq8' => 'float',
        'percent_mq135' => 'float',
    ];

    /**
     * Retorna os dias únicos das leituras no banco de dados.
     */
    public static function getAvailableDays()
    {
        // return Sensor::selectRaw('DATE(created_at) as day')
        //     ->groupBy('day')
        //     ->orderBy('day', 'desc')
        //     ->get()
        //     ->pluck('day');

        return collect([Carbon::now()->toDateString()]);
    }

    /**
     * Retorna o dia selecionado ou o mais recente disponível.
     */
    public static function getSelectedDay($selectedDay, $days)
    {
        return $selectedDay ?: $days->first();
    }

    /**
     * Retorna as leituras do banco de dados filtradas por dia e intervalo de horas.
     */
    public static function getSensorReadings(string $selectedDay): Collection
    {
        $selectedDayFormatted = Carbon::parse($selectedDay)->toDateString();

        return Sensor::whereRaw('DATE(created_at) = ?', [$selectedDayFormatted])
            ->orderBy('created_at', 'asc')
            ->get();
    }
}
