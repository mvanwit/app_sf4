<?php

class MatchTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('matches')->delete();

		Match::create(array(
			'my_char' => 'juri',
			'op_char' => 'akuma',
			'result' => 'win'
		));

		Match::create(array(
			'my_char' => 'chun-li',
			'op_char' => 'guile',
			'result' => 'loss'
		));

		Match::create(array(
			'my_char' => 'ibuki',
			'op_char' => 'bison',
			'result' => 'draw'
		));
	}

}
	
	