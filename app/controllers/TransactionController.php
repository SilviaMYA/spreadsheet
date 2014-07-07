<?php

class TransactionController extends \BaseController {

	/**
	 * Layout that should be used in response
	 */
	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$transactions = Transaction::orderBy('date_purchased', 'desc')
		//order by multiple columns to order as they are put in
			->orderBy('created_at', 'desc')
			->take(10)
			->get();
		$total_spent = Transaction::all()->sum('amount');

		//pull n_total and i_total
		$n_total = User::where('firstname', '=', 'Nathanael')->first()->transactions->sum('amount');
		$i_total = User::where('firstname', '=', 'IndiAna')->first()->transactions->sum('amount');

		$i_diff = $i_total-($total_spent/2);
		$n_diff = $n_total-($total_spent/2);

		return View::make('transactions.index')
			->with('transactions', $transactions->reverse())
			->with('total_spent', $total_spent)
			->with('n_total', $n_total)
			->with('i_total', $i_total)
			->with('i_diff', $i_diff)
			->with('n_diff', $n_diff);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return View::make('transactions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {
		$rules = array(
			'item'   => 'required|min:2',
			'amount' => 'required',
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			//return to form with erros
			return Redirect::to('transactions/create')
			->withErrors($validator)
			->withInput(Input::all());
		} else {
			//save record
			$transaction                 = new Transaction;
			$transaction->user_id        = Auth::user()->id;
			$transaction->amount         = Input::get('amount');
			$transaction->item           = Input::get('item');
			$transaction->date_purchased = date('Y-m-d H:i:s', strtotime(Input::get('date_purchased')));
			$transaction->save();

			Session::flash('message', $transaction->item.' added to '.Auth::user()->firstname);
			return Redirect::to(Request::url());

		}

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		$transaction = Transaction::find($id);
		$transaction->delete();

		Session::flash('message', 'Deleted '.$transaction->item.'.');
		return Redirect::to('transactions');
	}

}
