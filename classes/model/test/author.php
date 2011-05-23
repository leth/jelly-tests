<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Represents an author in the database.
 *
 * @package  Jelly
 */
class Model_Test_Author extends Model_Test
{
	public static function initialize(Jelly_Meta $meta)
	{
		parent::initialize($meta);
		
		$meta->fields(array(
			'id'       => Jelly::field('primary'),
			'name'     => Jelly::field('string'),
			'password' => Jelly::field('password'),
			'email'    => Jelly::field('email'),

			'test_posts'    => Jelly::field('hasmany'),
			'test_post'     => Jelly::field('hasone'),
			'test_role'     => Jelly::field('belongsto'),
			
			// Aliases for testing
			'_id'      => 'id',
		 ));
	}
}