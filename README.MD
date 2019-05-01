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

Get
```php

use Rd\RTime\RTime;

$rTime = new RTime(); 

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
RTime::timeDiff(RTime $first, RTime $second): int //Returt time diff in seconds
RTime::toSeconds(RTime $time): int // Convert RTime object to seconds
```

