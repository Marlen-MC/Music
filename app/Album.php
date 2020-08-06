<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Album extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'albums';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'year',
    ];
}