<?php

namespace tests\unit\components;

use app\components\{DailySentanceService, Sentance};

/**
 * Sentance unit test.
 * 
 * @author Leo Wang <cingwun0817@gmail.com>
 * @version 1.0.0
 */
class SentanceTest extends \Codeception\Test\Unit
{
    /**
     * Test dialy word.
     */
    public function testDailyWord()
    {
        $word = (new DailySentanceService)->getSentance();
        $this->assertIsString($word);
    }

    /**
     * Test custom Metaphorpsum word.
     */
    public function testCustomMetaphorpsumWord()
    {
        $word = (new Sentance)->getWord('Metaphorpsum');
        $this->assertIsString($word);
    }

    /**
     * Test custom Itsthisforthat word.
     */
    public function testCustomItsthisforthatWord()
    {
        $word = (new Sentance)->getWord('Itsthisforthat');
        $this->assertStringContainsString("So, Basically, It's Like A", $word);
        $this->assertIsString($word);
    }
}