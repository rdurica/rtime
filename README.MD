RD Time
------------

![Packagist](https://img.shields.io/packagist/l/rd/rtime.svg?style=flat-square)
![PHP from Packagist](https://img.shields.io/packagist/php-v/rd/rtime.svg?style=flat-square)
![GitHub last commit](https://img.shields.io/github/last-commit/rdurica/rtime.svg?style=flat-square)
![GitHub release](https://img.shields.io/github/release/rdurica/rtime.svg?style=flat-square)

Installation
------------

Install with 
[Composer](http://getcomposer.org/):

```sh
$ composer require rd/rtime
```

Overview
------------
This library converts DateTime to new Time object.

Initialize
```php

use Rd\RTime\RTime;

$rTime = new RTime(); 

// or

$rTime = new RTime(new DateTime('2019-04-30 10:00:00')); 

```

Get
```php
$rTime->getHours();
$rTime->getMinutes();
$rTime->getSeconds();
```

Set
```php
$rTime->setHours(int);
      ->setMinutes(int);
      ->setSeconds(int);
```

Add
```php
$rTime->addHours(int);
      ->addMinutes(int);
      ->addSeconds(int);
```

Utils:
```php
RTime::timeDiff(RTime $first, RTime $second): int
RTime::toSeconds(RTime $time): int
RTime::isEquals(RTime $first, RTime $second): bool
RTime::isLower(RTime $first, RTime $second): bool
RTime::isHigher(RTime $first, RTime $second): bool
```

