<?php
/**
 * @package    Joomla.UnitTest
 *
 * @copyright  Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Test class for JLanguageStemmerPorteren.
 *
 * @package     Joomla.UnitTest
 * @subpackage  Language
 * @since       11.1
 */
class JLanguageStemmerPorterenTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var JLanguageStemmerPorteren
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @return void
	 */
	protected function setUp()
	{
		parent::setUp();

		$this->object = new JLanguageStemmerPorteren;
	}

	/**
	 * Data provider for testStem()
	 *
	 * @return array
	 */
	public function testData()
	{
		return array(
			array('Car', 'Car', 'en'),
			array('Cars', 'Car', 'en'),
			array('fishing', 'fish', 'en'),
			array('fished', 'fish', 'en'),
			array('fish', 'fish', 'en'),
			array('powerful', 'power', 'en'),
			array('Reflect', 'Reflect', 'en'),
			array('Reflects', 'Reflect', 'en'),
			array('Reflected', 'Reflect', 'en'),
			array('stemming', 'stem', 'en'),
			array('stemmed', 'stem', 'en'),
			array('walk', 'walk', 'en'),
			array('walking', 'walk', 'en'),
			array('walked', 'walk', 'en'),
			array('walks', 'walk', 'en'),
			array('us', 'us', 'en'),
			array('I', 'I', 'en'),
			array('Standardabweichung', 'Standardabweichung', 'de')
		);
	}

	/**
	 * Test...
	 *
	 * @param   string  $token   @todo
	 * @param   string  $result  @todo
	 * @param   string  $lang    @todo
	 *
	 * @covers JLanguageStemmerPorteren::stem
	 * @covers JLanguageStemmerPorteren::<!public>
	 * @dataProvider testData
	 *
	 * @return void
	 */
	public function testStem($token, $result, $lang)
	{
		$this->assertEquals($result, $this->object->stem($token, $lang));
	}
}
