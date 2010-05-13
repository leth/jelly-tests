<?php

class Model_Builder_Loan extends Jelly_Builder
{
	public function outstanding()
	{
		return $this->where('returned', 'IS', NULL);
	}

	public function overdue()
	{
		return $this->where('due', '<', time())
		            ->outstanding();
	}
}
