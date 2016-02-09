<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'text',
        'date'
    ];
    //
    public  function user()
    {
        return $this->belongsTo('App\User');
    }

        public function tag()
        {
            return $this->belongsToMany('App\Tag');
        }
}
