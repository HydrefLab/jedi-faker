<?php

namespace HydrefLab\JediFaker\Test;

use HydrefLab\JediFaker\Factory;
use PHPUnit\Framework\TestCase;

class DroidTest extends TestCase
{
    public function testDroidIsNotNull()
    {
        $faker = Factory::create();
        $this->assertNotNull($faker->droid);
    }
}
