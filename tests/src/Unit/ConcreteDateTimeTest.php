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
        // Use proper timezone identifier instead of deprecated abbreviation 'PDT'
        $tz = new \DateTimeZone('America/Los_Angeles');
        $time = ConcreteDateTime::fromString('2019-08-22', $tz);
        $this->assertEquals($tz, $time->getDateTime()->getTimezone());
        // 1566457200 = 2019-08-22 00:00:00 PDT (UTC-7)
        $this->assertEquals(1566457200, $time->format('U'));
    }
}
