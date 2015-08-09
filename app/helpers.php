<?php 
/**
 * global function to load flash messages 
 * if the arguments are set, load the default message info.
 * else return the flash api with the method called on it.
 */
function flash($title = null, $message = null)
{
	$flash = app('App\Http\Flash');

	if (func_num_args() == 0) {
		return $flash;
	}
	return $flash->info($title, $message);
}