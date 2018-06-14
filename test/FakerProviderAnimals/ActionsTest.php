<?php

namespace FakerProviderAnimals\Test;

use Faker\Generator;
use FakerProviderAnimals\Actions;

class ActionsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    /**
     * Set up test environment
     */
    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Actions($faker));
        $this->faker = $faker;
    }

    /**
     * Test if animal name is a string
     */
    public function testIsString()
    {
        $actionName = $this->faker->action();

        $this->assertRegExp('/\p{Han}+/u', $actionName);
    }
}