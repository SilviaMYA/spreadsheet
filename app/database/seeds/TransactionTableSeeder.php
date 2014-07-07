<?php
// app/database/seeds/CommentTableSeeder.php

class TransactionTableSeeder extends Seeder {

	public function run() {

		DB::table('transactions')->delete();

		$n = User::where('firstname', '=', 'Nathanael')->first()->id;
		$i = User::where('firstname', '=', 'IndiAna')->first()->id;

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '100.00',
				'item'           => 'Lucy Will Wedding Gift',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('6/5/2013'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '115.00',
				'item'           => 'Bedding',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('6/17/2013'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '16.00',
				'item'           => 'Dollar Store',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('7/3/2013'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '99.00',
				'item'           => 'Target -- home items',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('7/4/2013'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '104.00',
				'item'           => 'Target -- home items',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('7/5/2013'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '387.00',
				'item'           => 'Flight to Memphis July 4th',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('6/9/2013'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '23.00',
				'item'           => 'India Palace',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('7/6/2013'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '50.00',
				'item'           => 'Curtains',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('7/7/2013'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '300.00',
				'item'           => 'Table and Chairs',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('7/29/2013'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '300.00',
				'item'           => 'TV',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('8/30/2013'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '80.99',
				'item'           => 'Target',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('9/1/2013'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '49.16',
				'item'           => 'TV Stand',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('8/31/2013'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '-22.06',
				'item'           => 'Target -- Return Curtain Rod',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('9/3/2013'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '23.47',
				'item'           => 'Target -- Bed Stands',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('9/4/2013'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '8.84',
				'item'           => 'Target -- Bed Stands',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('9/3/2013'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '100.00',
				'item'           => 'Quincy Adoption Fee',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('8/22/2013'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '100.95',
				'item'           => 'Bedroom Art',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('9/1/2013'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '20.66',
				'item'           => 'Young Ave Deli',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('9/12/2013'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '16.41',
				'item'           => 'Home Depot',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('9/13/2013'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '7.00',
				'item'           => 'Mouthwash',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('9/15/2013'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '13.09',
				'item'           => '3M Strips',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('9/18/2013'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '35.00',
				'item'           => 'Curtains',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('9/22/2013'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '31.00',
				'item'           => 'Target',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('9/22/2013'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '1453.00',
				'item'           => 'Quincy Vet Visit',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('11/3/2013'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '30.00',
				'item'           => 'Zoo',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('11/9/2013'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '39.90',
				'item'           => 'Kroger',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('11/10/2013'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '5.46',
				'item'           => 'Dollar Store',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('11/17/2013'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '118.66',
				'item'           => 'Gas for Madison',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('11/30/2013'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '40.00',
				'item'           => 'Tea Kettle',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('1/24/2014'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '300.00',
				'item'           => 'South Bluffs Deposit',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('3/29/2014'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '15.00',
				'item'           => 'Little Italy Pizza',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('4/27/2014'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '53.58',
				'item'           => 'Kitchen Stuff',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('4/27/2014'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '89.09',
				'item'           => 'Groceries',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('1/24/2014'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '22.17',
				'item'           => 'Groceries',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('4/30/2014'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '44.69',
				'item'           => 'Groceries',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/2/2014'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '78.29',
				'item'           => 'Bedding / Picinic Blanket',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('4/20/2014'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '213.57',
				'item'           => 'Target',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/10/2014'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '10.37',
				'item'           => 'Spices',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/10/2014'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '75.98',
				'item'           => 'Groceries',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/10/2014'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '7.60',
				'item'           => 'Bread Knife',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/10/2014'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '13.01',
				'item'           => 'Bread Knife',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/10/2014'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '12.00',
				'item'           => 'Bagels',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/10/2014'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '37.52',
				'item'           => 'Home Depot',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/11/2014'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '84.11',
				'item'           => 'Groceries',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/11/2014'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '24.44',
				'item'           => 'Bagels',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/18/2014'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '15.00',
				'item'           => 'Pizza',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/16/2014'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '71.00',
				'item'           => 'Target',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/18/2014'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '138.29',
				'item'           => 'Home Depot',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/17/2014'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '14.00',
				'item'           => 'Patio Chairs',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/26/2014'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '505.76',
				'item'           => 'Rent',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/16/2014'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '180.00',
				'item'           => 'May Rent Bristol',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/16/2014'))
			));

		Transaction::create(array(
				'user_id'        => $i,
				'amount'         => '980.00',
				'item'           => 'June Rent',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/30/2014'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '96.08',
				'item'           => 'Groceries',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/25/2014'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '99.17',
				'item'           => 'Groceries',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/18/2014'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '5.01',
				'item'           => 'Groceries',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('6/5/2014'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '39.85',
				'item'           => 'Target',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('6/1/2014'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '8.18',
				'item'           => 'Target (les return)',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/26/2014'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '39.77',
				'item'           => 'Groceries',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/29/2014'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '9.17',
				'item'           => 'Groceries',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/18/2014'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '12.06',
				'item'           => 'Bagels',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('6/1/2014'))
			));

		Transaction::create(array(
				'user_id'        => $n,
				'amount'         => '60.08',
				'item'           => 'Bedroom Chest',
				'date_purchased' => date('Y-m-d H:i:s', strtotime('5/25/2014'))
			));

	}

}