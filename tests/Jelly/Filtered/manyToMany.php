<?php

Jelly_Test::bootstrap();

/**
 * Tests filtered ManyToMany relationships
 *
 * @group jelly
 * @group jelly.filtered
 * @group jelly.filtered.manyToMany
 */
Class Jelly_Filtered_ManyToMany extends PHPUnit_Framework_TestCase
{

	public function testFoo()
	{
		try {
			$member_1 = Jelly::select('member', 2);
			echo "Books on loan:\n<br/>";
			foreach ($member_1->books_on_loan as $book)
				echo $book->name . "\n<br/>";
			
			echo "Books overdue:\n<br/>";
			foreach ($member_1->books_overdue as $book)
				echo $book->name . "\n<br/>";
				
		} catch (Exception $e) {
			var_dump($e);
		}
	}
}