<?php

class StoreController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$city = Input::get('city');
		$country = Input::get('country');
		$zip = Input::get('zip');
		
		If ( $city == '' && $country == '' && $zip == ''){
			$stores = Stores::all();
		}else{
			$stores = DB::table('store')
			->where('city','LIKE',"%$city%")
			->or_where('country','LIKE',"%$country%")
			->or_where('zip','=',"$zip")
			->get();
		}
		
		return Response::json(array(
			'error' => false,
			'stores' => $stores->toArray()),
			200
		)->setCallback(Input::get('callback'));

		
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
		/*
		$store = new Stores;
		$store->name = Request::get('name');
		$store->address = Request::get('address');
		$store->city = Request::get('city');
		$store->zip = Request::get('zip');
		$store->country = Request::get('country');
		$store->latitude = Request::get('latitude');
		$store->longitude = Request::get('longitude');
		$store->support_phone = Request::get('support_phone');
		$store->support_email = Request::get('support_email');
		$store->user_id = Auth::user()->id;
		
		if( $store->save() ){
		
			return Response::json(array(
				'error' => false,
				'msg' => 'store created successfully.',
				200
			)->setCallback(Input::get('callback'));


		}else{
			return Response::json( array(
				'error' => true,
				'msg' => 'issue creating store!'),
				200
			)->setCallback(Input::get('callback'));
		}
	*/
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$store = Stores::find($id);
		return Response::json(array(
		'error' => false,
		'store' => $store),
		200
		)->setCallback(Input::get('callback'));




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
		/*
		$store = Store::find($id);
		$store->name = Request::get('name');
		$store->address = Request::get('address');
		$store->city = Request::get('city');
		$store->zip = Request::get('zip');
		$store->country = Request::get('country');
		$store->latitude = Request::get('latitude');
		$store->longitude = Request::get('longitude');
		$store->support_phone = Request::get('support_phone');
		$store->support_email = Request::get('support_email');
		$store->user_id = Auth::user()->id;

		if( $store->save() ){
			return Response::json(array(
				'error' => false,
				'msg' => 'store has been updated',
				200
			)->setCallback(Input::get('callback'));
		}else{
			return Response::json( array(
				'error' => true,
				'msg' => 'issue updating store!'),
				200
			)->setCallback(Input::get('callback'));
		}
	*/
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$store = Store::find($id);
		
		if(!empty($store))
		
		$store->delete();
		
		return Response::json(array(
		'error' => false,
		'msg' => 'Store deleted'),
		200
		)->setCallback(Input::get('callback'));

	}


}
