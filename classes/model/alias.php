<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Used for testing aliasing. Has no real DB equivalent.
 *
 * @package  Jelly
 */
class Model_Alias extends Model_Test
{		
	public static function initialize(Jelly_Meta $meta)
	{
		parent::initialize($meta);
		
		// All fields are aliased to different columns
		$meta->fields(array(
			'id'           => Jelly::field('primary', array(
				'column' => 'id-alias',
			)),
			'name'         => Jelly::field('string', array(
				'column' => 'name-alias',
			)),
			'description'  => Jelly::field('string', array(
				'column' => 'description-alias',
			)),
			
			'_id'          => 'id',
			'_name'        => 'name',
			'_description' => 'description',
			
			// Non-existent alias shouldn't hurt anybody
			'_bar'         => 'foo',
		));
	}
}