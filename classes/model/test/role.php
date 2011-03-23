<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Represents a specific role in the database.
 *
 * @package  Jelly
 */
class Model_Test_Role extends Model_Test
{
	public static function initialize(Jelly_Meta $meta)
	{
		parent::initialize($meta);
		
		$meta->fields(array(
			'id' => Jelly::field('primary'),
			'name' => Jelly::field('string'),
		));
	}
}