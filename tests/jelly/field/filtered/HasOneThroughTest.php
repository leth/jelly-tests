<?php

// Ensure the test environment has been created
Jelly_Test::bootstrap();

/**
 * Tests filtered HasOneThrough relationships
 *
 * @group jelly
 * @group jelly.field
 * @group jelly.field.filtered
 * @group jelly.field.filtered.hasOneThrough
 */
Class Jelly_Field_Filtered_HasOneThroughTest extends Jelly_Field_HasOneThroughTest
{

	public function provider_hasOneThrough()
	{
		return array(
			array(1, 'first_holder_nofiltered', 1),
			array(2, 'first_holder_nofiltered', 2),
			array(3, 'first_holder_nofiltered', 2),
			array(4, 'first_holder_nofiltered', NULL),
			array(1, 'current_holder', 2),
			array(2, 'current_holder', 2),
			array(3, 'current_holder', 3),
			array(4, 'current_holder', NULL),
		);
	}
}