<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
<<<<<<< HEAD
    protected $fillable = [
        'user_id', 'title', 'description'
    ];

    /**
     * Return an user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
=======

    protected $fillable = [
        'user_id', 'title', 'description'
    ];
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function posts() {
        return $this->hasMany('App\Models\Post');
    }
>>>>>>> 3771714b514393664141cb9d24afe4c26e64b6e4
}
