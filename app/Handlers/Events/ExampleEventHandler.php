<?php namespace Pizzeria\Handlers\Events;

use Pizzeria\Events\ExampleEvent;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use \Illuminate\Support\Facades\Log;

class ExampleEventHandler {

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  ExampleEvent  $event
	 * @return void
	 */
	public function handle(ExampleEvent $event)
	{
		//
		log::debug('ExampleEventHandler::handle');
		log::debug($event->getMessage());
	}

}
