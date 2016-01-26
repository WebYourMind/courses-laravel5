<?php namespace Pizzeria\Events;

use Pizzeria\Events\Event;

use Illuminate\Queue\SerializesModels;

class ExampleEvent extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */

	private $message;

	public function __construct($msg)
	{
		//
		$this->message = $msg;
	}

	public function getMessage(){
		return $this->message;
	}

}
