<?php

Jelly_Test::bootstrap();

/**
 * Tests filtered HasOneThrough relationships
 *
 * @group jelly
 * @group jelly.field
 * @group jelly.field.filtered
 * @group jelly.field.filtered.hasOneThrough
 */
Class Jelly_Field_Filtered_HasOneThroughTest extends PHPUnit_Framework_TestCase
{

	public function testFilterProvider()
	{
		return array(
			// No Filtering. Should function as vanilla HasOne
			// TODO
			// Filtering on through table
			// array(1, FALSE, 'current_holder'),
			// array(2,     2, 'current_holder'),
			// array(3,     2, 'current_holder'),
			// array(4, FALSE, 'current_holder'),
			// Filtering on target model
			
		);
	}
	
	/**
	 * @dataProvider testFilterProvider
	 */
	public function testFilter($book_id, $member_id, $field)
	{
		$book = Jelly::query('test_book', $member_id)->select();
		$member = $book->$field;
		
		if ($member_id === FALSE)
		{
			$this->assertEquals(FALSE, $member->loaded());
		}
		else
		{
			$this->assertEquals($member_id, $member->id());
		}
		
	}
}