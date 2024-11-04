<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table='persona';
    protected $primaryKey = 'per_cod';
    protected $fillable = [
        'per_cod', 'per_nom', 'per_appm',
        'per_prof', 'per_telf', 'per_cel',
        'per_email','per_dir','per_fnac',
        'per_lnac','per_est','per_create' ,'per_update'
    ];
    public $timestamps=false;
    public static function find($ci)
    {
        return static::where('per_cod',compact('ci'))->first();
    }
}
