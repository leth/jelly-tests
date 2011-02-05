<?php

Jelly_Test::bootstrap();

/**
 * Tests filtered ManyToMany relationships
 *
 * @group jelly
 * @group jelly.filtered
 * @group jelly.filtered.manyToMany
 */
Class Jelly_Filtered_ManyToManyTest extends PHPUnit_Framework_TestCase
{
	
	public function testFilterProvider()
	{
		return array(
			// No Filtering. Should function as vanilla ManyToMany
			array(1, 1, 'books_ever_loaned', array(1), array(2, 3, 4)),
			array(2, 3, 'books_ever_loaned', array(1, 2, 3), array()),
			// Filtering on through table
			array(1, 0, 'books_on_loan', array(), array(1, 2, 3, 4)),
			array(1, 0, 'books_overdue', array(), array(1, 2, 3, 4)),
			array(2, 2, 'books_on_loan', array(1, 2), array(3, 4)),
			array(2, 1, 'books_overdue', array(2), array(1, 3, 4)),
			// Filtering on foreign table
			array(1, 0, 'books_ever_loaned_except_book_one', array(), array(1)),
			array(2, 2, 'books_ever_loaned_except_book_one',array(2,3), array(1)),
			// Filtering on both tables
			array(1, 0, 'books_on_loan_except_book_one', array(), array(1, 2, 3, 4)),
			array(2, 1, 'books_on_loan_except_book_one', array(2), array(1, 3, 4)),
		);
	}
	
	/**
	 * @dataProvider testFilterProvider
	 */
	public function testFilter($member_id, $exp_count, $field, $exp_has, $exp_has_not)
	{
		$member = Jelly::query('member', $member_id)->select();
		$this->assertEquals($exp_count, count($member->$field));

		$this->assertEquals(TRUE, $member->has($field, $exp_has));
		
		foreach ($exp_has_not as $id)
			$this->assertEquals(FALSE, $member->has($field, array($id)));
		
	}
}