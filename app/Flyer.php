<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
	/**
	 * fillable fields for a flyer
	 * @var array
	 */
	protected $fillable = [
		'street',
		'city',
		'state',
		'country',
		'zip',
		'price',
		'description'
	]

	/**
	 * A Flyer is composed of many photos.
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
    public function photos()
    {
    	return $this->hasMany('App\Photo');
    }
}

