<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Represents a post in the database.
 *
 * @package  Jelly
 */
class Model_Test_Post extends Model_Test
{
	public static function initialize(Jelly_Meta $meta)
	{
		parent::initialize($meta);
		
		// Posts always load_with an author
		$meta->load_with(array('test_author'));
		$meta->fields(array(
			'id'   => Jelly::field('primary'),
			
			'name' => Jelly::field('string'),
			
			'slug' => Jelly::field('slug', array(
				'unique' => TRUE
			)),
			
			'status'  => Jelly::field('enum', array(
				'choices' => array('draft', 'published', 'review'),
			)),
			
			'created' => Jelly::field('timestamp', array(
				'auto_now_create' => TRUE
			)),	
			
			'updated' => Jelly::field('timestamp', array(
				'auto_now_update' => TRUE
			)),	
			
			'test_author' => Jelly::field('belongsto'),
			'rohtua' => Jelly::field('belongsto', array(
				'column'  => 'test_author_id',
				'foreign' => 'test_author',
			)),

			'approved_by' => Jelly::field('belongsto', array(
				'foreign' => 'test_author.id',
				'column'  => 'approved_by',
			)),

			'test_categories'  => Jelly::field('manytomany'),
			
			// Alias columns, for testing
			'_id'   => 'id',
			'_slug' => 'slug'
		));
	}
}