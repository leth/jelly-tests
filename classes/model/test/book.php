<?php

class Model_Test_Book extends Model_Test
{
	public static function initialize(Jelly_Meta $meta)
	{
		parent::initialize($meta);

		$meta->fields(array(
			'id' => Jelly::field('primary'),
			'name' => Jelly::field('string'),

			// Test model name defaults
			'test_member' => Jelly::field('hasOneThrough'),

			'last_holder' => Jelly::field('hasOneThrough', array(
				'foreign' => 'test_member',
				'through' => 'test_loan',
			)),
			'first_holder_nofiltered' => Jelly::field('Filterable_HasOneThrough', array(
				'foreign' => 'test_member',
				'through' => 'test_loan',
			)),
			'current_holder' => Jelly::field('Filterable_HasOneThrough', array(
				'foreign' => 'test_member',
				'through' => 'test_loan',
				'filter_through' => 'outstanding',
			)),
		));
	}
}