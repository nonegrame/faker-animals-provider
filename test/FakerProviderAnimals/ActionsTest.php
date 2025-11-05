<?php

namespace FakerProviderAnimals\Test;

use Faker\Generator;
use FakerProviderAnimals\Actions;
use PHPUnit\Framework\TestCase;

class ActionsTest extends TestCase
{
    private Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Actions($faker));
        $this->faker = $faker;
    }

    public function testIsString(): void
    {
        $actionName = $this->faker->action();

        $this->assertMatchesRegularExpression('/\p{Han}+/u', $actionName);
    }
}