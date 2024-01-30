<?php

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    protected $table = 'movies';

    protected $fillable = array('name', 'release_year');

    public function actors()
    {
        return $this->belongsToMany('Actor', 'pivot_table');
    }
}
