<?php

class Model_Loan extends Model_Test
{
	public static function initialize(Jelly_Meta $meta)
	{
		parent::initialize($meta);
		
		$meta->fields(array(
			'id' => Jelly::field('primary'),
			'member' => Jelly::field('belongsto'),
			'book' => Jelly::field('hasone'),
			
			'issued' => Jelly::field('timestamp'),
			'due' => Jelly::field('timestamp'),
			'returned' => Jelly::field('timestamp'),
		));
	}
}