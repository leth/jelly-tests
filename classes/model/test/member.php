<?php

class Model_Test_Member extends Model_Test
{
	public static function initialize(Jelly_Meta $meta)
	{
		parent::initialize($meta);
		
		$meta->fields(array(
			'id' => Jelly::field('primary'),
			'name' => Jelly::field('string'),
			
			'books_ever_loaned' => Jelly::field('filterable_manytomany', array(
				'foreign' => 'test_book',
				'through' => 'test_loan',
			)),
			'books_ever_loaned_except_book_one' => Jelly::field('filterable_manytomany', array(
				'foreign' => 'test_book',
				'through' => 'test_loan',
				'filter'  => 'is_not_book_one',
			)),
			
			'books_on_loan' => Jelly::field('filterable_manytomany', array(
				'foreign' => 'test_book',
				'through' => 'test_loan',
				'filter_through' => 'outstanding'
			)),
			'books_on_loan_except_book_one' => Jelly::field('filterable_manytomany', array(
				'foreign' => 'test_book',
				'through' => 'test_loan',
				'filter'  => 'is_not_book_one',
				'filter_through' => 'outstanding'
			)),
			
			'books_overdue' => Jelly::field('filterable_manytomany', array(
				'foreign' => 'test_book',
				'through' => 'test_loan',
				'filter_through' => 'overdue'
			)),
			
			'all_loans' => Jelly::field('filterable_hasmany', array(
				'foreign' => 'test_loan',
			)),
			
			'overdue_loans' => Jelly::field('filterable_hasmany', array(
				'foreign' => 'test_loan',
				'filter'  => 'overdue',
			)),
			'current_loans' => Jelly::field('filterable_hasmany', array(
				'foreign' => 'test_loan',
				'filter'  => 'outstanding',
			)),
		));
	}
}