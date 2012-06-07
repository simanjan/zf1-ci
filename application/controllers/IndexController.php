<?php

/**
 * This is the short description for a DocBlock.
 *
 * This is the long description for a DocBlock. This text may contain
 * multiple lines and even some _markdown_.
 *
 * * Markdown style lists function too
 * * Just try this out once
 *
 * The section after the long description contains the tags; which provide
 * structured meta-data concerning the given element.
 *
 * @author  Aliaksandr Simanovich <as@extrascript.com>
 */
class IndexController extends Zend_Controller_Action
{
	/**
	 * Contains dummy value
	 */
	const DUMMY_VALUE = 123;

	/**
	 * @var null
	 */
	private $dummy = NULL;

	/**
	 * @var int
	 */
	private $dummyInt = 0;

	/**
	 * @var string
	 */
	private $dummyString = '';

	/**
	 * @var array
	 */
	private $dummyArray = array();

	/**
	 * This is init() method of IndexController class
	 *
	 * This is the long description for a init() method. This text may contain
	 * multiple lines and even some _markdown_.
	 *
	 * * Markdown style lists function too
	 * * Just try this out once
	 */
	public function init()
    {
        /* Initialize action controller here */
    }

	/**
	 * This is indexAction() method of IndexController class
	 *
	 * This is the long description for a init() method. This text may contain
	 * multiple lines and even some _markdown_.
	 *
	 * * Markdown style lists function too
	 * * Just try this out once
	 */
	public function indexAction()
	{
		// action body
		eval('$a = 123;');
	}

	/**
	 * This is originalTestCode() method of IndexController class
	 *
	 * This is the long description for a init() method. This text may contain
	 * multiple lines and even some _markdown_.
	 *
	 * * Markdown style lists function too
	 * * Just try this out once
	 */
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

	/**
	 * This is copyPastingTestCode() method of IndexController class
	 *
	 * This is the long description for a init() method. This text may contain
	 * multiple lines and even some _markdown_.
	 *
	 * * Markdown style lists function too
	 * * Just try this out once
	 */
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

	/**
	 * This is init() method of IndexController class
	 *
	 * This is the long description for a init() method. This text may contain
	 * multiple lines and even some _markdown_.
	 *
	 * * Markdown style lists function too
	 * * Just try this out once
	 *
	 * @param string $a Dummy string
	 */
	public function messyCode($a = 'String')
	{
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

