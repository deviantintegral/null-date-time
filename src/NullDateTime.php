<?php

namespace Deviantintegral\NullDateTime;

/**
 * Implements an empty date and time.
 */
class NullDateTime implements DateTimeFormatInterface
{
    public function format(string $format): string
    {
        return '';
    }
}
