<?php

namespace HydrefLab\JediFaker\Test;

use Faker\Generator;
use HydrefLab\JediFaker\Factory;
use PHPUnit\Framework\TestCase;

class MovieTest extends TestCase
{
    /**
     * @var Generator
     */
    protected $faker;

    public function setUp()
    {
        $this->faker = Factory::create();
    }

    public function testEpisodeIsNotNull()
    {
        $this->assertNotNull($this->faker->episode);
    }

    public function testEpisodeReturnsFirstEpisodeTitle()
    {
        $this->assertEquals('Episode I: The Phantom Menace', $this->faker->episode(1));
    }

    public function testEpisodeOpeningCrawlIsNotNull()
    {
        $this->assertNotNull($this->faker->episodeOpeningCrawl);
    }

    public function testEpisodeOpeningCrawlReturnsFirstEpisodeCrawl()
    {
        $this->assertEquals(
            "Turmoil has engulfed the\r\nGalactic Republic. The taxation\r\nof trade routes to outlying star\r\nsystems is in dispute.\r\n\r\nHoping to resolve the matter\r\nwith a blockade of deadly\r\nbattleships, the greedy Trade\r\nFederation has stopped all\r\nshipping to the small planet\r\nof Naboo.\r\n\r\nWhile the Congress of the\r\nRepublic endlessly debates\r\nthis alarming chain of events,\r\nthe Supreme Chancellor has\r\nsecretly dispatched two Jedi\r\nKnights, the guardians of\r\npeace and justice in the\r\ngalaxy, to settle the conflict....",
            $this->faker->episodeOpeningCrawl(1)
        );
    }
}
