<?php

namespace app\commands;

use app\components\{DailySentanceService, Sentance};
use yii\console\Controller;

/**
 * Get daily sentance word.
 * 
 * @author Leo Wang <cingwun0817@gmail.com>
 * @version 1.0.0
 */
class SentanceController extends Controller
{
    /**
     * Get daily word.
     */
    public function actionGetDailyWord()
    {
        $word = (new DailySentanceService)->getSentance();

        echo "Daily Word: $word", PHP_EOL;
    }

    public function actionGetCustomWord()
    {
        $word = (new Sentance)->getWord('Metaphorpsum');

        echo "Metaphorpsum Word: $word", PHP_EOL;

        $word = (new Sentance)->getWord('Itsthisforthat');

        echo "Itsthisforthat Word: $word", PHP_EOL;
    }
}