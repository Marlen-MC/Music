<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Genre extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'genres';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}