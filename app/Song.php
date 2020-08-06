<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Song extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'songs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'artist',
        'album',
        'genre',
        'language',
    ];
}
