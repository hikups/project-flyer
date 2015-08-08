<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	/**
	 * tell laravel that the tables name is flyer_photos
	 * because by default it copies the pluriel of the models name , Photos
	 */
	protected $table = 'flyer_photos';

	/**
	 * set the fillable field for the flyer_photo table
	 */
	protected $fillable = ['path'];


	/**
	 * A Photo belongsTo a Flyer
	 * @return  \Illuminate\Database\Eloquent\Relations\HasMany
	 */
    public function flyer()
    {
    	return $this->belongsTo('App\Flyer');
    }
}
