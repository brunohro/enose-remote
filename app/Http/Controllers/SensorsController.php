<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorsController extends Controller
{
    public function index()
    {
        // Busca todos os sensores do banco
        $sensors = Sensor::all();

        // Passa para a view
        return view('sensors', [
            'title' => 'SENSORS',
            'pathToProfileImage' => '#',
            'sensors' => $sensors  // Passa os dados para a view
        ]);
        // return view("sensors", [
        //     "title" => "SENSORS",
        //     "pathToProfileImage" => "#"
        // ]);
    }
}
