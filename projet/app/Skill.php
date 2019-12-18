<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['name'];

    public function interns()
    {
        return $this->hasMany('App\Intern');
    }
}
