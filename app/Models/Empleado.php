<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'email',
        'sexo',
        'area_id',
        'boletin',
        'descripcion',
    ];

    public static function search(){

        return $users = DB::table('empleados')
            ->join('areas', 'areas.id', '=', 'empleados.area_id')
            ->select('empleados.*','areas.nombre_area')
            ->get();
    }
}
