<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actors';

    protected $fillable = array('name');

    public function movies()
    {
        return $this->belongsToMany('Movies', 'pivot_table');
    }
}
