<?php

namespace Deviantintegral\NullDateTime\Tests\Unit;

use Deviantintegral\NullDateTime\NullDateTime;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Deviantintegral\NullDateTime\NullDateTime
 */
class NullDateTimeTest extends TestCase
{
    public function testFormat()
    {
        $this->assertSame('', (new NullDateTime())->format('U'));
    }
}
