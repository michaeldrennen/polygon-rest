<?php

namespace MichaelDrennen\PolygonREST;

use Carbon\Carbon;
use PHPUnit\Framework\TestCase;

class PolygonRestTest extends TestCase {

    const TIMEZONE = 'America/New_York';

    /**
     * @test
     */
    public function testInstantiate() {
        $symbol      = 'AAPL';
        $date        = Carbon::create( 2019, 1, 2, 12, 0, 0, self::TIMEZONE );
        $polygonREST = new PolygonREST();
        $quotes = $polygonREST->historicQuotes( $symbol, $date );
        foreach($quotes as $quote):
            // "map": {
            //    "aE": "askexchange",
            //    "aP": "askprice",
            //    "aS": "asksize",
            //    "bE": "bidexchange",
            //    "bP": "bidprice",
            //    "bS": "bidsize",
            //    "c": "condition",
            //    "t": "timestamp"
            //  },
            echo $quote->askexchange;
            echo $quote->askprice;
            echo $quote->asksize;
            echo $quote->bidexchange;
            echo $quote->bidprice;
            echo $quote->bidsize;
            echo $quote->condition;
            echo $quote->timestamp;
        endforeach;
    }
}