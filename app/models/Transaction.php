<?php

class Transaction extends Eloquent {

	protected $table = 'transactions';

	protected $fillable = array('amount', 'name', 'item');

	public function user() {
		return $this->belongsTo('User');
	}

}