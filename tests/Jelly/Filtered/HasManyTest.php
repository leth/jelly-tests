<?php

Jelly_Test::bootstrap();

/**
 * Tests filtered hasMany repationships
 *
 * @group jelly
 * @group jelly.filtered
 * @group jelly.filtered.hasMany
 */
Class Jelly_Filtered_HasManyTest extends PHPUnit_Framework_TestCase
{

	public function testFilterProvider()
	{
		return array(
			// No Filtering. Should function as vanilla HasMany
			array(1, 1, 'all_loans', array(1), array(2, 3, 4)),
			array(2, 3, 'all_loans', array(2, 3, 4), array(1)),
			// With Filtering
			array(1, 0, 'overdue_loans', array(), array(1, 2, 3, 4)),
			array(1, 0, 'current_loans', array(), array(1, 2, 3, 4)),
			array(2, 1, 'overdue_loans', array(3), array(1, 2, 4)),
			array(2, 2, 'current_loans', array(2, 3), array(1, 4)),
		);
	}
	
	/**
	 * @dataProvider testFilterProvider
	 */
	public function testFilter($member_id, $exp_count, $field, $exp_has, $exp_has_not)
	{
		$member = Jelly::query('member', $member_id)->select();
		$this->assertEquals($exp_count, count($member->$field));

		if (count($exp_has) != 0)
			$this->assertEquals(TRUE, $member->has($field, $exp_has));
		
		foreach ($exp_has_not as $id)
			$this->assertEquals(FALSE, $member->has($field, array($id)));
		
	}
}