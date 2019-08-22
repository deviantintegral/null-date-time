# Null Date Time for PHP

[![CircleCI](https://circleci.com/gh/deviantintegral/null-date-time.svg?style=svg)](https://circleci.com/gh/deviantintegral/null-date-time)

This package provides classes that decorate \DateTime so that it is always
formattable as a string, even if the time is empty or null.

PHP's \DateTime object does not have any way to represent an "empty" date.
While there is a \DateTimeInterface class, it's documentation explicitly
says it is not for implementation but type hinting only.

We don't want calling code to have to check for null returns on every get
call. DateTimeFormatInterface requires that format() return an empty string
if the underlying date is not set.

When constructing a DateTime object, a common pattern would be:

```php
<?php

function createTime(string $time = null): \Deviantintegral\NullDateTime\DateTimeFormatInterface
{
  if (null === $time || '' === $time) {
    return new \Deviantintegral\NullDateTime\NullDateTime();
  }

  return \Deviantintegral\NullDateTime\ConcreteDateTime::fromString($time);
}

$dateTime = createTime('now');
$dateTime->format('U'); // Will return the current Unix timestamp.
if ($dateTime instanceof \Deviantintegral\NullDateTime\ConcreteDateTimeInterface) {
  $dateTime->getDateTime()->getOffset(); // Call any of the usual \DateTime methods.
}

$dateTime = createTime('');
$dateTime->format('U'); // Will return an empty string.
```
