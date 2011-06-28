<?php

class Model_Test_Loan extends Model_Test
{
	public static function initialize(Jelly_Meta $meta)
	{
		parent::initialize($meta);
		
		$meta->fields(array(
			'id' => Jelly::field('primary'),
			'test_member' => Jelly::field('belongsto'),
			'test_book' => Jelly::field('hasone'),
			
			'issued' => Jelly::field('timestamp'),
			'due' => Jelly::field('timestamp'),
			'returned' => Jelly::field('timestamp'),
		));
	}
}