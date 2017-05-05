<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //Categorias de Cursos, no depende de ninguna tabla

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'name',
            'starts',
            'rank',
    ];

    public function SearchByName($name)
    {
       
        //$categorie = self::where('name',$name)->first();

        //return $categorie;
        return $name." lo recibi";
    }
}
