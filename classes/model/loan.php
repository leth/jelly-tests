<?php

class Model_loan extends Jelly_Model
{
	public static function initialize(Jelly_Meta $meta)
	{
		$meta->db = Jelly_Test::GROUP;
		$meta->fields += array(
			'id' => new Field_Primary,
			'member' => new Field_BelongsTo,
			'book' => new Field_HasOne,
			
			'issued' => new Field_Timestamp,
			'due' => new Field_Timestamp,
			'returned' => new Field_Timestamp,
		);
	}
}