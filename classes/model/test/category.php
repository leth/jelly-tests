<?php

class Model_Test_Category extends Jelly_Model
{
	public static function initialize(Jelly_Meta $meta)
	{
		$meta->db(Jelly_Test::GROUP);
		$meta->fields(array(
			'id'     => Jelly::field('primary'),
			'name'   => Jelly::field('string'),
			'test_posts'  => Jelly::field('manytomany'),
			'parent' => Jelly::field('belongsto', array(
				'foreign' => 'test_category',
				'column' => 'parent_id'
			)),
		));
	}
}