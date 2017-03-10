<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model 
{

    protected $fillable = [
        'name', 
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
