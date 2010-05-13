<?php

class Model_Member extends Jelly_Model
{
	public static function initialize(Jelly_Meta $meta)
	{
		$meta->db = Jelly_Test::GROUP;
		$meta->fields += array(
			'id' => new Field_Primary,
			'name' => new Field_String,
			'books_on_loan' => new Field_Filterable_ManyToMany(array(
				'foreign' => 'book',
				'through' => 'loan',
				'filter_through' => 'outstanding'
			)),
			'books_overdue' => new Field_Filterable_ManyToMany(array(
				'foreign' => 'book',
				'through' => 'loan',
				'filter_through' => 'overdue'
			)),
		);
	}
}