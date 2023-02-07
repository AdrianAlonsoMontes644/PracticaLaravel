<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empezado
 *
 * @property $id
 * @property $genero_id
 * @property $categoria
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Genero $genero
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empezado extends Model
{

    static $rules = [
		'genero_id' => 'required',
		'categoria' => 'required',
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['genero_id','categoria','nombre'];

    protected $table = 'empezado';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function genero()
    {
        return $this->hasOne('App\Models\Genero', 'id', 'genero_id');
    }


}
