<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Language extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'languages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}
