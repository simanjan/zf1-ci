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
		eval('$a = 123;');
	}

	public function originalTestCode()
	{
		$champions = array(
			 'chelsea' => 'champions league',
			 'juventus' => 'italy',
			 'real' => 'spain',
			 'manchester-city' => 'england',
			 'zenit' => 'russia',
		);
		return $champions;
	}

	public function copyPastingTestCode()
	{
		$champions = array(
			'chelsea' => 'champions league',
			'juventus' => 'italy',
			'real' => 'spain',
			'manchester-city' => 'england',
			'zenit' => 'russia',
		);
		return $champions;
	}

	public function messyCode()
	{
		$a = 'String';

		if (strpos($a, 'Str') !== false) {
			if (strpos($a, 'Str') !== true) {
				foreach ($a as $char) {
					if ($char == 'X') {
						if (date('Y') != 2020) {
							for ($i = 2000; $i < date('Y'); $i--) {
								$this->init();
							}

							print 'Messy Code';
						}
					}
				}
			}
		}
	}


}

