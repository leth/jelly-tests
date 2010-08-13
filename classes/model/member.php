<?php

class Model_Member extends Jelly_Model
{
	public static function initialize(Jelly_Meta $meta)
	{
		$meta->db = Jelly_Test::GROUP;
		$meta->fields += array(
			'id' => new Field_Primary,
			'name' => new Field_String,
			
			'books_ever_loaned' => new Field_Filterable_ManyToMany(array(
				'foreign' => 'book',
				'through' => 'loan',
			)),
			'books_ever_loaned_except_book_one' => new Field_Filterable_ManyToMany(array(
				'foreign' => 'book',
				'through' => 'loan',
				'filter'  => 'is_not_book_one',
			)),
			
			'books_on_loan' => new Field_Filterable_ManyToMany(array(
				'foreign' => 'book',
				'through' => 'loan',
				'filter_through' => 'outstanding'
			)),
			'books_on_loan_except_book_one' => new Field_Filterable_ManyToMany(array(
				'foreign' => 'book',
				'through' => 'loan',
				'filter'  => 'is_not_book_one',
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