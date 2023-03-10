<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pelicula
 *
 * @property $id
 * @property $genero_id
 * @property $nombre
 * @property $productor
 * @property $pirata
 * @property $nota
 * @property $created_at
 * @property $updated_at
 *
 * @property Genero $genero
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pelicula extends Model
{

    static $rules = [
		'genero_id' => 'required',
		'nombre' => 'required',
		'productor' => 'required',
		'pirata' => 'required',
		'nota' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['genero_id','nombre','productor','pirata','nota'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function genero()
    {
        return $this->hasOne('App\Models\Genero', 'id', 'genero_id');
    }


}
