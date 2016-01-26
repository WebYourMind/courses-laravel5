<?php namespace Pizzeria\Http\Controllers;

use Pizzeria\Menu;
use Pizzeria\Events\ExampleEvent;
use Pizzeria\Events\OrderCreated;
use Pizzeria\Http\Requests;
use Pizzeria\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Event;
use \Illuminate\Support\Facades\Log;
use \Illuminate\Support\Facades\Validator;

class NewOrderController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function showMenu()
	{
		//
		$menuList = Menu::all();
		return view('menu', ['menuList' => $menuList]);
	}

	// To show old view purpose only
	public function showMenuLesson8()
	{		
		$menuList = Menu::all();
		return view('lesson_8_menu', ['menuList' => $menuList]);
	}

	public function postOrder()
	{
		log::debug('postOrder::Input params');
		log::debug(Input::all());

    	//Validation rules
        $rules = array(
			'pizza_marinara' 	=> array('required','integer','between:0,3'),
			'pizza_margherita' 	=> array('required','integer','between:0,3'),
			'olio' 				=> array('min:1|max:20'),
			'name' 				=> array('required','min:1|max:20'),
			'email' 			=> array('required','email', 'min:1|max:20'),
			'freeOrder'			=> array('exists:menu,dish')
    	);
		// The validator
		$validation = Validator::make(Input::all(), $rules);		
		
		// Check for fails
	    if ($validation->fails()){    	
	        // Validation has failed.
	    	log::error('Validation has failed');
	    	$messages = $validation->messages();
	    	$returnedMsg = "";
	    	foreach ($messages->all() as $message){
			    $returnedMsg = $returnedMsg . " - " . $message;
			}
			log::error('Validation fail reason: '.$returnedMsg);
			return  redirect()->back()->withErrors($validation);
	    }
		log::debug('Validation passed');

		$msg = array( 'email' => Input::get('email'),
					  'name'  => Input::get('name')
					);
		$response = Event::fire(new ExampleEvent($msg));		
		$response = Event::fire(new OrderCreated($msg));

		return view('orderdone', ['msg' => $msg]);
	}

}
