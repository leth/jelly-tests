<?php

// Ensure the test environment has been created
Jelly_Test::bootstrap();

/**
 * Tests filtered HasOneThrough relationships
 *
 * @group jelly
 * @group jelly.field
 * @group jelly.field.hasOneThrough
 */
Class Jelly_Field_HasOneThroughTest extends PHPUnit_Framework_TestCase
{
// TODO Test cases for HasOneThrough

	public function provider_hasOneThrough()
	{
		return array(
			array(1, 'last_holder', 1),
			array(2, 'last_holder', 2),
			array(3, 'last_holder', 2),
			array(4, 'last_holder', NULL),
			array(1, 'test_member', 1),
			array(2, 'test_member', 2),
			array(3, 'test_member', 2),
			array(4, 'test_member', NULL),
		);
	}

	/**
	 * @dataProvider provider_hasOneThrough
	 */
	public function test_get($book_id, $field, $member_id)
	{
		$book = Jelly::query('test_book', $book_id)->select();

		$this->assertNotNull($book);
		$this->assertInstanceOf('Model_Test_Book', $book);

		if ($member_id === NULL)
		{
			$this->assertFalse($book->$field->loaded());
		}
		else
		{
			$this->assertEquals($member_id, $book->$field->id);
			$this->assertInstanceOf('Model_Test_Member', $book->$field);
		}
	}

	/**
	 * @dataProvider provider_hasOneThrough
	 */
	public function test_with($book_id, $field, $member_id)
	{
		$book = Jelly::query('test_book', $book_id)->with($field)->select();

		$this->assertNotNull($book);
		$this->assertInstanceOf('Model_Test_Book', $book);

		if ($member_id === NULL)
		{
			$this->assertFalse($book->$field->loaded());
		}
		else
		{
			$this->assertEquals($member_id, $book->$field->id);
			$this->assertInstanceOf('Model_Test_Member', $book->$field);
		}
	}
}