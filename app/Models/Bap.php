<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bap extends Model
{
    protected $fillable = ['title',
        'title',
        'fonctionCHEF',
        'NomPrenomCHEF',
        'adresseCHEF',
        'emailCHEF',
        'telCHEF',
        'fonctionCON',
        'NomPrenomCON',
        'adresseCON',
        'emailCON',
        'telCON',
        'social',
        'type',
        'raison',
        'contexte',
        'objectif',
        'contraintes',
    ];

    public function bap() {
        return $this->belongsTo('App\Models\Bap');
    }

}