<?php

class Model_WrappedPost extends Model_Post
{
	public static function initialize(Jelly_Meta $meta)
	{
		parent::initialize($meta);
		$fields = $meta->fields;
		
		$fields['created'] = new Field_NativeTimestamp(array(
				'auto_now_create' => TRUE,
				'column' => 'created_ts'
			));
		$fields['updated'] = new Field_NativeTimestamp(array(
				'auto_now_update' => TRUE,
				'column' => 'updated_ts'
			));
		
		$meta->fields = $fields;
		$meta->table = 'posts';
	}
}