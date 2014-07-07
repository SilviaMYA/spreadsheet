<?php
// app/database/seeds/CommentTableSeeder.php

class CommentTableSeeder extends Seeder {

	public function run() {

		DB::table('comments')->delete();

		Comment::create(array(
				'author' => 'Nathanael Smith',
				'text'   => 'Look this is a new test comment',
			));

		Comment::create(array(
				'author' => 'D Barksdale',
				'text'   => 'No, the king stay the king',
			));

		Comment::create(array(
				'author' => 'Detective Greggs',
				'text'   => 'If I hear the music I\'m gunna dance',
			));

	}

}