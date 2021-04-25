<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 *
 * @property $id
 * @property $numero_tel
 * @property $apellidos
 * @property $nombres
 * @property $monto_pago
 * @property $fecha_pago
 * @property $plan
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{
    
    static $rules = [
		'numero_tel' => 'required',
		'apellidos' => 'required',
		'nombres' => 'required',
		'monto_pago' => 'required',
		'fecha_pago' => 'required',
		'plan' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero_tel','apellidos','nombres','monto_pago','fecha_pago','plan'];



}
