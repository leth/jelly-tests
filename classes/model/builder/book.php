<?php

class Model_Builder_Book extends Jelly_Builder
{
	
	/**
	 * This is for a construed test case.
	 */
	public function is_not_book_one()
	{
		return $this->where('name', '!=', 'Book One');
	}
}
