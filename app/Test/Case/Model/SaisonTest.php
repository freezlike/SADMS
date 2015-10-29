<?php
App::uses('Saison', 'Model');

/**
 * Saison Test Case
 */
class SaisonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.saison',
		'app.malady',
		'app.symptome',
		'app.maladies_symptome'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Saison = ClassRegistry::init('Saison');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Saison);

		parent::tearDown();
	}

}
