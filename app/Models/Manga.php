<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Manga
 *
 * @property $id
 * @property $genero_id
 * @property $nombre
 * @property $mangaka
 * @property $fisico
 * @property $nota
 * @property $created_at
 * @property $updated_at
 *
 * @property Genero $genero
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Manga extends Model
{

    static $rules = [
		'genero_id' => 'required',
		'nombre' => 'required',
		'mangaka' => 'required',
		'fisico' => 'required',
		'nota' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['genero_id','nombre','mangaka','fisico','nota'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function genero()
    {
        return $this->hasOne('App\Models\Genero', 'id', 'genero_id');
    }


}
