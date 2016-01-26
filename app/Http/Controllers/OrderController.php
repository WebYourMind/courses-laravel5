<?php namespace Pizzeria\Http\Controllers;

class OrderController extends Controller {


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	/*
	|------------------------------------ {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$order = new Order;
		$order->cliente = 'Stefano';
		$order->indirizzo = 'via Verdi, 15';
		$order->totale = '15';
		$order->save();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$order = Order::find($id);
		$order = Order::findOrFail($id);
		$orders = Order::where('cliente', '=', $id)->get();
		$user = $order->user();
		$orders = $user->orders();
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$order = Order::find($id);
		$order->cliente = 'Stefano';
		$order->indirizzo = 'via Rossi, 150';
		$order->totale = '45';
		$order->save();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		Order::destroy($id);
	}


}
