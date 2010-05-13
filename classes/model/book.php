<?php

class Model_Book extends Jelly_Model
{
	public static function initialize(Jelly_Meta $meta)
	{
		$meta->db = Jelly_Test::GROUP;
		$meta->fields += array(
			'id' => new Field_Primary,
			'name' => new Field_String,
		);
	}
}