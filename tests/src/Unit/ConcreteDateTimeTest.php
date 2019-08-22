<?php

namespace Deviantintegral\NullDateTime\Tests\Unit;

use Deviantintegral\NullDateTime\ConcreteDateTime;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Deviantintegral\NullDateTime\ConcreteDateTime
 */
class ConcreteDateTimeTest extends TestCase
{

    public function testFromString()
    {
        $tz = new \DateTimeZone('PDT');
        $time = ConcreteDateTime::fromString("2019-08-22", $tz);
        $this->assertEquals($tz, $time->getDateTime()->getTimezone());
        $this->assertEquals(1566460800, $time->format('U'));
    }

}
