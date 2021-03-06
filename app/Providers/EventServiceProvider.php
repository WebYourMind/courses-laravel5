<?php namespace Pizzeria\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use \Illuminate\Support\Facades\Log;
use \Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider {

	/**
	 * The event handler mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
		'event.name' => [ 'EventListener', ],
		'Pizzeria\Events\ExampleEvent' => [ 'Pizzeria\Handlers\Events\ExampleEventHandler'],
	];

	/**
	 * Register any other events for your application.
	 *
	 * @param  \Illuminate\Contracts\Events\Dispatcher  $events
	 * @return void
	 */
	public function boot(DispatcherContract $events)
	{
		parent::boot($events);
		//	
		Event::listen('Pizzeria\Events\OrderCreated', function($event)
		{
		    // Handle the event...
			Log::debug('EventServiceProvider::boot [Pizzeria\Events\OrderCreated] - got the event message: ');		    
			Log::debug($event->getMessage());	
		});			
	}

}
