<?php 

namespace App\Http;
	
class Flash{ 
	/**
	 * create a flash message 
 	*/
	public function create($title, $message, $level, $key = 'flash_message')
	{
		session()->flash( $key, [
			'title' => $title,
			'message' => $message,
			'level' => $level
			]);
	}
	/**
	 * create an information flash message	
	 */
	public function info($title, $message)
	{
		$this->create($title, $message, 'info');
		
	}

	/**
	 * create an success flash message	
	 */
		public function success($title, $message)
	{
		$this->create($title, $message, 'success');
	}

	/**
	 * create an overlay flash message	
	 */
		public function overlay($title, $message, $level = 'success')
	{
		$this->create($title, $message, $level, 'flash_message_overlay');
	}
}

