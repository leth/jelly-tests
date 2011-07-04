<?php defined('SYSPATH') or die('No direct script access.');

// Ensure the test environment has been created
Jelly_Test::bootstrap();

/**
 * Tests BelongsTo fields.
 *
 * @package Jelly
 * @group   jelly
 * @group   jelly.issue
 * @group   jelly.issue.20
 * @group   jelly.field
 * @group   jelly.field.belongs_to
 */
class Jelly_Issue_20Test extends Unittest_TestCase
{
	/**
	 * Provider for test_with
	 */
	public function provider_with()
	{
		return array(
			// Class definition already joins this relation
			// We should ignore a second request to join it.
			array('test_author'),
			array('test_author','test_role'),
			array('rohtua'),
			array('rohtua','elor'),
		);
	}

	/**
	 * Tests Jelly_Field_BelongsTo::with()
	 *
	 * @dataProvider  provider_with
	 */
	public function test_with()
	{
		$rels = func_get_args();

		$query = Jelly::query('test_post');

		if (! empty($rels))
			$query->with(join(':', $rels));

		$query->select();
	}
}

