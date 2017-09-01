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
			'make' => 'Honda',
			'model' => 'CG',
			'color' => 1,
			'weight' => 110,
			'price' => 120000,
			'image' => 'honda',
			'cc' => 200,
		), false);

		$this->assertTrue($motor->save(false));
		$motor=Motor::model()->findByPk($motor->id);
		$this->assertTrue($motor instanceof Motor);
	}

	public function testUpdateMotor()
	{
		$motor=new Motor;
		$motor->setAttributes(array(
			'make' => 'Suzuki',
			'model' => 'kd',
			'color' => 1,
			'weight' => 110,
			'price' => 120000,
			'image' => 'suzuki',
			'cc' => 200,
		), false);
		$this->assertTrue($motor->save(false));
		$motor=Motor::model()->findByPk($motor->id);
		$motor->make='Yamaha';
		$this->assertTrue($motor->save(false));
		$this->assertEquals("Yamaha", $motor->make);
	}

	public function testDeleteMotor()
	{
		$motor=Motor::model()->find('make = "Kawasaki"');
		$this->assertNotNull($motor);
		$motor->delete();
		$motor=Motor::model()->find('make = "Kawasaki"');
		$this->assertNull($motor);
	}
}
