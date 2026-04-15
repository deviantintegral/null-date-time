<?php

namespace Deviantintegral\NullDateTime\Tests\Unit;

use Deviantintegral\NullDateTime\NullDateTime;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(NullDateTime::class)]
class NullDateTimeTest extends TestCase
{
    public function testFormat()
    {
        $this->assertSame('', (new NullDateTime())->format('U'));
    }
}
