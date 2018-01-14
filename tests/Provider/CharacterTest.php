<?php

namespace HydrefLab\JediFaker\Test;

use Faker\Generator;
use HydrefLab\JediFaker\Factory;
use PHPUnit\Framework\TestCase;

class CharacterTest extends TestCase
{
    /**
     * @var Generator
     */
    protected $faker;

    public function setUp()
    {
        $this->faker = Factory::create();
    }

    public function testLightSideIsNotNull()
    {
        $this->assertNotNull($this->faker->lightSide);
    }

    public function testDarkSideIsNotNull()
    {
        $this->assertNotNull($this->faker->darkSide);
    }

    public function testCharacterIsNotNull()
    {
        $this->assertNotNull($this->faker->character);
    }

    public function testQuotesNotNull()
    {
        $this->assertNotNull($this->faker->quote);
    }
}
