<?php

namespace HydrefLab\JediFaker\Provider\en_US;

use Faker\Provider\Base;

class Character extends Base
{
    /**
     * @var array
     */
    protected static $darkSide = [
        'Darth Maul',  'Darth Sidious', 'Darth Vader', 'Dooku',
        'Kylo Ren',
        'Snoke',
    ];

    /**
     * @var array
     */
    protected static $lightSide = [
        'Anakin Skywalker',
        'Obi-Wan Kenobi',
        'Leia Organa', 'Luke Skywalker',
        'Mace Windu',
        'Rey',
        'Qui-Gon Jinn',
        'Yoda',
    ];

    /**
     * @var array
     */
    protected static $characters = [
        'Amilyn Holdo',
        'Boba Fett',
        'C-3PO', 'Captain Phasma', 'Chewbacca',
        'Finn',
        'Gial Ackbar', 'Grievous',
        'Han Solo',
        'Jabba the Hutt', 'Jango Fett', 'Jar Jar Binks',
        'Lando Calrissian',
        'Maz Kanata',
        'Nute Gunray',
        'Padmé Amidala', 'Poe Dameron',
        'R2-D2',
        'Sheev Palpatine', 'Sebulba',
        'Watto', 'Wilhuff Tarkin',
    ];

    /**
     * @var array
     */
    protected static $quotes = [
        'ackbar' => [
            'It\'s a trap!',
            'The Shield is down! Commence attack on the Death star\'s main reactor.',
            'We\'ve got to give those fighters more time. Concentrate all fire on that Super Star Destroyer.',
            'We have no choice General Calrissian, our cruisers can\'t repel firepower of that magnitude!',
        ],
        'anakin_skywalker' => [
            'General Grievous, you\'re shorter than I expected.',
            'Jedi business, go back to your drinks!',
            'Just for once, let me look on you with my own eyes.',
        ],
        'boba_fett' => [
            'He\'s no good to me dead.',
            'Put Captain Solo in the cargo hold.',
            'What if he doesn\'t survive? He\'s worth a lot to me.',
        ],
        'c_3po' => [
            'As a matter of fact, I\'m not even sure what planet I\'m on.',
            'Don\'t call me a mindless philosopher, you overweight glob of grease.',
            'Don\'t get technical with me. What mission? What are you talking about? I\'ve just about had enough of you. Go that way, you\'ll be malfunctioning in a day you near-sighted scrap pile.',
            'Hello. I don\'t believe we have been introduced. R2-D2? A pleasure to meet you. I am C-3PO, Human-Cyborg Relations.',
            'He\'s holding a thermal detonator!',
            'I\'m rather embarrassed, General Solo, but it appears that you are to be the main course at a banquet in my honour.',
            'I suggest a new strategy, R2: let the Wookiee win.',
            'In his belly, you will find a new definition of pain and suffering, as you are slowly digested over a thousand years.',
            'It\'s against my programming to impersonate a deity.',
            'Oh, dear. His High Exaltedness, the great Jabba the Hutt, has decreed that you are to be terminated immediately.',
            'Oh, my dear friend. How I\'ve missed you.',
            'Oh my. Space travel sound rather perilous. I can assure you they will never get me on one of those dreadful Star Ships.',
            'R2-D2, you know better than to trust a strange computer.',
            'Sir, the possibility of successfully navigating an asteroid field is approximately 3,720 to 1.',
        ],
        'dooku' => [
            'I sense great fear in you, Skywalker. You have hate... you have anger... but you don\'t use them.',
            'Master Kenobi, you disappoint me. Yoda holds you in such high esteem. Surely you can do better!',
            'Twice the pride, double the fall.',
            'What if I told you that the Republic was now under the control of a Dark Lord of the Sith?',
        ],
        'darth_maul' => [
            'At last we will reveal ourselves to the Jedi. At last we will have revenge.',
        ],
        'darth_sidious' => [
            'Power! Unlimited power!',
            'The Force is strong with you. A powerful Sith you will become. Henceforth, you shall be known as Darth... Vader.',
        ],
        'darth_vader' => [
            'Give yourself to the Dark Side. It is the only way you can save your friends. Yes, your thoughts betray you. Your feelings for them are strong. Especially for ... sister. So, you have a twin sister. Your feelings have now betrayed her, too. Obi-Wan was wise to hide her from me. Now his failure is complete. If you will not turn to the Dark Side ... then perhaps she will!',
            'He will join us or die, master.',
            'I find your lack of faith disturbing.',
            'I\'ve been waiting for you, Obi-Wan. We meet again, at last. The circle is now complete. When I left you, I was but the learner; now I am the master.',
            'Luke, you can destroy the Emperor. He has foreseen this. It is your destiny. Join me, and together we can rule the galaxy as father and son.',
            'No. I am your father.',
            'Obi-Wan has taught you well.',
            'The force is strong with this one.',
            'You cannot hide forever, Luke.',
            'You may dispense with the pleasantries, Commander. I am here to put you back on schedule.',
        ],
        'finn' => [
            'Droid, please!',
            'I\'m a big deal in the Resistance. Which puts a real target on my back.',
            'I\'m not Resistance. I\'m not a hero. I\'m a stormtrooper. Like all of them, I was taken from a family I\'ll never know. And raised to do one thing. But my first battle, I made a choice. I wasn\'t gonna kill for them. So I ran. Right into you. And you looked at me like no one ever had. I was ashamed of what I was. But I\'m done with the First Order. I\'m never going back. Rey, come with me.',
            'I need help with this giant hairy thing!',
            'Sanitation',
            'Solo, we\'ll figure it out. We\'ll use the Force.',
        ],
        'jango_fett' => [
            'I\'m just a simple man trying to make my way in the universe.',
        ],
        'han_solo' => [
            'Chewie, we\'re home.',
            'Crazy thing is, it\'s true. The Force. The Jedi ... All of it. It\'s all true.',
            'Great, kid. Don\'t get cocky.',
            'Great shot kid, that was one in a million.',
            'Hokey religions and ancient weapons are no match for a good blaster at your side, kid.',
            'How ya feeling kid? You don\'t look so bad to me. You look strong enough to pull the ears off a gundark.',
            'I think my eyes are getting better. Instead of a big dark blur, I see a big light blur.',
            'I\'ve got a bad feeling about this.',
            'It\'s not my fault.',
            'It\'s the ship that made the Kessel run in less than twelve parsecs. I\'ve outrun Imperial starships. Not the local bulk cruisers, mind you. I\'m talking about the big Corellian ships, now. She\'s fast enough for you, old man.',
            'Lando\'s not a system, he\'s a man!',
            'Laugh it up, Fuzz ball.',
            'Never tell me the odds!',
            'Now don\'t get jittery, Luke. There are a lot of command ships. Keep your distance, though, Chewie, but don\'t look like you\'re trying to keeping your distance.',
            'On second thought, let\'s pass on that, huh?',
            'One thing\'s for sure, we\'re all going to be a lot thinner.',
            'Traveling through hyperspace ain\'t like dusting crops, farm boy.',
            'There\'s no mystical energy field that controls my destiny.',
            'Women always figure out the truth. Always.',
            'Well, you tell them that Han Solo just stole back the Millennium Falcon, for good!',
        ],
        'kylo_ren' => [
            'Show me again the power of the darkness... And I\'ll let nothing stand in our way.',
            'Your son is gone. He was weak and foolish like his father, so I destroyed him.',
        ],
        'leia' => [
            'Aren\'t you a little short for a storm trooper?',
            'Governor Tarkin, I should have expected to find you holding Vader\'s leash. I recognised your foul stench when I was brought on board.',
            'Help me, Obi-Wan Kenobi. You\'re my only hope.',
            'Hope.',
            'I don\'t know where you get your delusions, laser brain.',
            'Someone has to save our skins. Into the garbage chute, fly boy.',
            'Some day you\'re gonna be wrong, I just hope I\'m there to see it.',
            'The more you tighten your grip, Tarkin, the more star systems will slip through your fingers.',
            'Why, you stuck-up, half-witted, scruffy-looking nerf herder!',
            'Will someone get this big walking carpet out of my way?',
            'Would it help if I got out and pushed?',
            'You came in that thing? You\'re braver than I thought.',
            'You know, no matter how much we fought, I\'ve always hated watching you leave.',
        ],
        'luke_skywalker' => [
            'I\'ll never turn to the dark side. You\'ve failed, your highness. I am a Jedi, like my father before me.',
            'I want to come with you to Alderaan. There\'s nothing for me here now. I want to learn the ways of the Force and become a Jedi like my father.',
            'If there\'s a bright centre to the universe, you\'re on the planet that it\'s farthest from.',
            'Take care of yourself Han. I guess that\'s what you\'re best at isn\'t it?',
            'There is good in him. I\'ve felt it.',
            'You should\'ve bargained, Jabba. This is the last mistake you\'ll ever make.',
        ],
        'maz_kanata' => [
            'I have lived long enough to see the same eyes in different people.',
            'The belonging you seek is not behind you... it is ahead.',
            'The Force, it\'s calling to you. Just let it in.',
        ],
        'obi_wan_kenobi' => [
            'In my experience there is no such thing as luck.',
            'Luke, I don\'t want to lose you to the Emperor the way I lost Vader.',
            'Obi-Wan Kenobi. Obi-Wan. Now that\'s a name I have not heard in a long time. A long time.',
            'The Force will be with you. Always.',
            'The council has granted me to train you. You will be a Jedi. I promise.',
            'These aren\'t the droids you\'re looking for...',
            'Well, if droids could think, there\'d be none of us here, would there?',
            'Who\'s the more foolish; the fool, or the fool who follows him?',
            'You can\'t win, Darth. Strike me down, and I will become more powerful than you could possibly imagine.',
            'You were my brother, Anakin. I loved you.',
            'You were the chosen one! It was said that you would destroy the Sith, not join them. Bring balance to the Force, not leave it in darkness.',
            'You will never find a more wretched hive of scum and villainy.',
            'Your eyes can deceive you. Don\'t trust them.',
        ],
        'padme_amidala' => [
            'Anakin, you\'re breaking my heart! And you\'re going down a path I cannot follow!',
            'So this is how liberty dies. With thunderous applause.',
            'What if the democracy we thought we were serving no longer exists, and the Republic has become the very evil we\'ve been fighting to destroy?',
        ],
        'palpatine' => [
            'A Jedi gains power through understanding and a Sith gains understanding through power.',
            'Good Anakin. Good. Kill him. Kill him now.',
            'It is unavoidable. It is your destiny. You, like your father, are now mine!',
            'Now, young Skywalker, you will die.',
            'So be it... Jedi!',
            'The dark side of the Force is a pathway to many abilities some consider to be... unnatural.',
            'The Force is strong with him. The son of Skywalker must not become a Jedi.',
            'There is a great disturbance in the Force.',
            'Welcome, Young Skywalker, I have been expecting you.',
        ],
        'qui_gon_jinn' => [
            'There\'s always a bigger fish.',
            'Your focus determines your reality.',
        ],
        'rey' => [
            'The garbage\'ll do!',
        ],
        'snoke' => [
            'There has been an awakening. Have you felt it?',
        ],
        'tarkin' => [
            'You don\'t know how hard I found it, signing the order to terminate your life.',
        ],
        'yoda' => [
            'Ahh, hard to see, the Dark Side is.',
            'Ahh, strong am I with the Force, but not that strong. Twilight is upon me, and soon, night must fall. That is the way of things. The way of the Force.',
            'Always in motion is the future.',
            'Death is a natural part of life. Rejoice for those around you who transform into the Force.',
            'Do. Or do not. There is no try.',
            'Fear is the path to the dark side. Fear leads to anger; anger leads to hate; hate leads to suffering. I sense much fear in you.',
            'Fought well, you have... my old Padawan.',
            'If you end your training now – if you choose the quick and easy path as Vader did – you will become an agent of evil.',
            'Mmm. Lost a planet, Master Obi-Wan has. How embarrassing.',
            'Size matters not. Look at me. Judge me by my size, do you?',
            'Truly wonderful the mind of a child is.',
            'When 900 years old, you reach... Look as good, you will not.',
            'When gone am I, the last of the Jedi will you be. The Force runs strong in your family. Pass on what you have learned.',
            'Yes, a Jedi\'s strength flows from the Force. But beware of the dark side. Anger, fear, aggression; the dark side of the Force are they. Easily they flow, quick to join you in a fight. If once you start down the dark path, forever will it dominate your destiny, consume you it will, as it did Obi-Wan\'s apprentice.',
        ],
    ];

    /**
     * @return string
     */
    public function lightSide(): string
    {
        return $this->generator->parse(static::randomElement(static::$lightSide));
    }

    /**
     * @return string
     */
    public function darkSide(): string
    {
        return $this->generator->parse(static::randomElement(static::$darkSide));

    }

    /**
     * @return string
     */
    public function character(): string
    {
        return $this->generator->parse(static::randomElement(static::$lightSide + static::$darkSide + static::$characters));

    }

    /**
     * @param string|null $character
     * @return null|string
     */
    public function quote(string $character = null)
    {
        if (null === $character) {
            return $this->generator->parse(static::randomElement($this->flatten(static::$quotes)));
        }

        if (true === array_key_exists($character, static::$quotes)) {
            return $this->generator->parse(static::randomElement(static::$quotes[$character]));
        }

        return null;
    }

    /**
     * @param array $array
     * @return array
     */
    protected function flatten(array $array): array
    {
        $result = [];

        foreach ($array as $item) {
            if (false == is_array($item)) {
                $result[] = $item;
            } else {
                $result = array_merge($result, array_values($item));
            }
        }

        return $result;
    }
}