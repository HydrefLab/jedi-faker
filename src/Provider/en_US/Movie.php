<?php

namespace HydrefLab\JediFaker\Provider\en_US;

use Faker\Provider\Base;

class Movie extends Base
{
    /**
     * @var array
     */
    protected static $episodes = [
        1 => 'Episode I: The Phantom Menace',
        2 => 'Episode II: Attack of the Clones',
        3 => 'Episode III: Revenge of the Sith',
        4 => 'Episode IV: A New Hope',
        5 => 'Episode V: The Empire Strikes Back',
        6 => 'Episode VI: Return of the Jedi',
        7 => 'Episode VII: The Force Awakens',
        8 => 'Episode VIII: The Last Jedi',
    ];

    /**
     * @var array
     */
    protected static $episodesOpeningCrawls = [
        1 => "Turmoil has engulfed the\r\nGalactic Republic. The taxation\r\nof trade routes to outlying star\r\nsystems is in dispute.\r\n\r\nHoping to resolve the matter\r\nwith a blockade of deadly\r\nbattleships, the greedy Trade\r\nFederation has stopped all\r\nshipping to the small planet\r\nof Naboo.\r\n\r\nWhile the Congress of the\r\nRepublic endlessly debates\r\nthis alarming chain of events,\r\nthe Supreme Chancellor has\r\nsecretly dispatched two Jedi\r\nKnights, the guardians of\r\npeace and justice in the\r\ngalaxy, to settle the conflict....",
        2 => "There is unrest in the Galactic\r\nSenate. Several thousand solar\r\nsystems have declared their\r\nintentions to leave the Republic.\r\n\r\nThis separatist movement,\r\nunder the leadership of the\r\nmysterious Count Dooku, has\r\nmade it difficult for the limited\r\nnumber of Jedi Knights to maintain \r\npeace and order in the galaxy.\r\n\r\nSenator Amidala, the former\r\nQueen of Naboo, is returning\r\nto the Galactic Senate to vote\r\non the critical issue of creating\r\nan ARMY OF THE REPUBLIC\r\nto assist the overwhelmed\r\nJedi....",
        3 => "War! The Republic is crumbling\r\nunder attacks by the ruthless\r\nSith Lord, Count Dooku.\r\nThere are heroes on both sides.\r\nEvil is everywhere.\r\n\r\nIn a stunning move, the\r\nfiendish droid leader, General\r\nGrievous, has swept into the\r\nRepublic capital and kidnapped\r\nChancellor Palpatine, leader of\r\nthe Galactic Senate.\r\n\r\nAs the Separatist Droid Army\r\nattempts to flee the besieged\r\ncapital with their valuable\r\nhostage, two Jedi Knights lead a\r\ndesperate mission to rescue the\r\ncaptive Chancellor....",
        4 => "It is a period of civil war.\r\nRebel spaceships, striking\r\nfrom a hidden base, have won\r\ntheir first victory against\r\nthe evil Galactic Empire.\r\n\r\nDuring the battle, Rebel\r\nspies managed to steal secret\r\nplans to the Empire's\r\nultimate weapon, the DEATH\r\nSTAR, an armored space\r\nstation with enough power\r\nto destroy an entire planet.\r\n\r\nPursued by the Empire's\r\nsinister agents, Princess\r\nLeia races home aboard her\r\nstarship, custodian of the\r\nstolen plans that can save her\r\npeople and restore\r\nfreedom to the galaxy....",
        5 => "It is a dark time for the\r\nRebellion. Although the Death\r\nStar has been destroyed,\r\nImperial troops have driven the\r\nRebel forces from their hidden\r\nbase and pursued them across\r\nthe galaxy.\r\n\r\nEvading the dreaded Imperial\r\nStarfleet, a group of freedom\r\nfighters led by Luke Skywalker\r\nhas established a new secret\r\nbase on the remote ice world\r\nof Hoth.\r\n\r\nThe evil lord Darth Vader,\r\nobsessed with finding young\r\nSkywalker, has dispatched\r\nthousands of remote probes into\r\nthe far reaches of space....",
        6 => "Luke Skywalker has returned to\r\nhis home planet of Tatooine in\r\nan attempt to rescue his\r\nfriend Han Solo from the\r\nclutches of the vile gangster\r\nJabba the Hutt.\r\n\r\nLittle does Luke know that the\r\nGALACTIC EMPIRE has secretly\r\nbegun construction on a new\r\narmored space station even\r\nmore powerful than the first\r\ndreaded Death Star.\r\n\r\nWhen completed, this ultimate\r\nweapon will spell certain doom\r\nfor the small band of rebels\r\nstruggling to restore freedom\r\nto the galaxy...",
        7 => "Luke Skywalker has vanished.\r\nIn his absence, the sinister\r\nFIRST ORDER has risen from\r\nthe ashes of the Empire\r\nand will not rest until\r\nSkywalker, the last Jedi,\r\nhas been destroyed.\r\n\r\nWith the support of the\r\nREPUBLIC, General Leia Organa\r\nleads a brave RESISTANCE.\r\nShe is desperate to find her\r\nbrother Luke and gain his\r\nhelp in restoring peace\r\nand justice to the galaxy.\r\n\r\nLeia has sent her most daring\r\npilot on a secret mission\r\nto Jakku, where an old ally\r\nhas discovered a clue to\r\nLuke's whereabouts....",
        8 => "The FIRST ORDER reigns.\r\nHaving decimated the peaceful\r\nRepublic, Supreme Leader Snoke\r\nnow deploys the merciless\r\nlegions to seize military\r\ncontrol of the galaxy.\r\n\r\nOnly General Leia Organa's\r\nband of RESISTANCE fighters\r\nstand against the rising\r\ntyranny, certain that Jedi\r\nMaster Luke Skywalker will\r\nreturn and restore a spark of\r\nhope to the fight.\r\n\r\nBut the Resistance has been\r\nexposed. As the First Order\r\nspeeds toward the rebel base,\r\nthe brave heroes mount a\r\ndesperate escape....",
    ];

    /**
     * @param int|null $episodeNo
     * @return null|string
     */
    public function episode(int $episodeNo = null)
    {
        if (null === $episodeNo) {
            return $this->generator->parse(static::randomElement(static::$episodes));
        }

        return static::$episodes[$episodeNo] ?? null;
    }

    /**
     * @param int|null $episodeNo
     * @return null|string
     */
    public function episodeOpeningCrawl(int $episodeNo = null)
    {
        if (null === $episodeNo) {
            return $this->generator->parse(static::randomElement(static::$episodesOpeningCrawls));
        }

        return static::$episodesOpeningCrawls[$episodeNo] ?? null;
    }
}