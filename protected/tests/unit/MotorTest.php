<?php
class MotorTest extends CDbTestCase
{
	/**
	 * We use 'Motor' fixtures.
	 * @see CWebTestCase::fixtures
	 */
	public $fixtures=array(
		'motors'=>'Motor',
	);
	
	public function testCreateMotor()
	{
		$motor=new Motor;
		$motor->setAttributes(array(
			'model' => 'Honda',
			'cc' => '125',
			'color' => 1,
			'weight' => 110,
			'price' => 120000,
			'image' => 'honda',
			'year' => '1987',
		), false);

		$this->assertTrue($motor->save(false));
		$motor=Motor::model()->findByPk($motor->id);
		$this->assertTrue($motor instanceof Motor);
	}

	public function testUpdateMotor()
	{
		$motor=new Motor;
		$motor->setAttributes(array(
			'model' => 'Honda',
			'cc' => '125',
			'color' => 1,
			'weight' => 110,
			'price' => 120000,
			'image' => 'honda',
			'year' => '1987',
		), false);
		$this->assertTrue($motor->save(false));
		$motor=Motor::model()->findByPk($motor->id);
		$motor->model='suzuki';
		$this->assertTrue($motor->save(false));
		$this->assertEquals("suzuki", $motor->model);
	}

	public function testDeleteMotor()
	{
		$motor=Motor::model()->find('model = "suzuki"');
		$this->assertNotNull($motor);
		$motor->delete();
		$motor=Motor::model()->find('model = "suzuki"');
		$this->assertNull($motor);
	}
}
