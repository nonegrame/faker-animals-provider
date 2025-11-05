<?php

namespace FakerProviderAnimals\Test\Provider\en_GB;

use Faker\Generator;
use FakerProviderAnimals\Animals;
use PHPUnit\Framework\TestCase;

/**
 * Class AnimalsTest
 *
 * @package FakerProviderAnimals\Test\Provider\en_GB
 */
class AnimalsTest extends TestCase
{
    private Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Animals($faker));
        $this->faker = $faker;
    }

    /**
     * Test if animal name is a string
     */
    public function testIsString(): void
    {
        $animalName = $this->faker->animal();

        $this->assertMatchesRegularExpression('/\p{Han}+/u', $animalName);
    }
}
