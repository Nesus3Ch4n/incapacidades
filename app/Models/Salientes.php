<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;


class Salientes extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'salientes';

    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nombre_completo',
        'tipo_empleado',
        'dias_incapacidad',
        'cedula',
        'codigo_incapacidad',
        'correo',
        'fecha_radicado',
        'incapacidad_pdf',
    ];
    protected $guarded = [];

}
