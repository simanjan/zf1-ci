<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

	public function indexAction()
	{
		// action body
	}

	public function originalTestCode()
	{
		$a = 'String';
		$b = 'String';
		if (strpos($a, 'Str') !== false)
		{
			if (strpos($b, 'Str') !== false)
			{
				$this->init();
			}
			else
			{
				$std = new stdClass();
				return $std;
			}
		}
	}

	public function copyPastingTestCode()
	{
		$a = 'String';
		$b = 'String';
		if (strpos($a, 'Str') !== false)
		{
			if (strpos($b, 'Str') !== false)
			{
				$this->init();
			}
			else
			{
				$std = new stdClass();
				return $std;
			}
		}
	}

	public function messyCode()
	{
		$a = 'String';

		if (strpos($a, 'Str') !== false)
		{
			if (strpos($a, 'Str') !== false)
			{
				foreach ($a as $char)
				{
					if ($char == 'X')
					{
						if (date('Y') != 2020)
						{
							$this->init();
							print 'Messy Code';
						}
					}
				}
			}
		}
	}


}

