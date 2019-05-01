<?php declare(strict_types=1);

namespace Rd\RTime;

use DateTime;

/**
 * Class RTime
 *
 * @author  Robert Durica <r.durica@gmail.com>
 * @package Rd\Time
 */
class RTime
{

    /**
     * @var int
     */
    private $hours;

    /**
     * @var int
     */
    private $minutes;

    /**
     * @var int
     */
    private $seconds;

    /**
     * @var DateTime
     */
    private $dateTime;


    /**
     * RTime constructor.
     *
     * @param DateTime|null $dateTime
     * @throws \Exception
     */
    public function __construct(DateTime $dateTime = null)
    {
        $this->dateTime = $dateTime ?: new DateTime();

        $this->hours = (int)$this->dateTime->format('H');
        $this->minutes = (int)$this->dateTime->format('i');
        $this->seconds = (int)$this->dateTime->format('s');
    }


    /**
     * @return int
     */
    public function getHours(): int
    {
        return $this->hours;
    }


    /**
     * @param int $hours
     * @return RTime
     */
    public function setHours(int $hours): RTime
    {
        $this->hours = $hours;

        return $this;
    }


    /**
     * @param int $hours
     * @return RTime
     */
    public function addHours(int $hours): RTime
    {

        $this->hours = $this->getHours() + $hours;

        return $this;
    }


    /**
     * @return int
     */
    public function getMinutes(): int
    {
        return $this->minutes;
    }


    /**
     * @param int $minutes
     * @return RTime
     */
    public function setMinutes(int $minutes): RTime
    {
        $this->minutes = $minutes;

        return $this;
    }


    /**
     * @param int $minutes
     * @return RTime
     */
    public function addMinutes(int $minutes): RTime
    {
        $total = $this->getMinutes() + $minutes;

        if ($total >= 60) {
            $diff = (int)floor($total / 60);
            $this->addHours($diff);

            $this->minutes = $total - $diff * 60;
        } else {
            $this->minutes = $this->getMinutes() + $minutes;
        }

        return $this;
    }


    /**
     * @return int
     */
    public function getSeconds(): int
    {
        return $this->seconds;
    }


    /**
     * @param int $seconds
     * @return RTime
     */
    public function setSeconds(int $seconds): RTime
    {
        $this->seconds = $seconds;

        return $this;
    }


    /**
     * @param int $seconds
     * @return RTime
     */
    public function addSeconds(int $seconds): RTime
    {

        $total = $this->getSeconds() + $seconds;

        if ($total >= 60) {
            $diff = (int)floor($total / 60);
            $this->addMinutes($diff);

            $this->seconds = $total - $diff * 60;
        } else {
            $this->seconds = $this->getSeconds() + $seconds;
        }

        return $this;
    }


    /**
     * Compare two RTime objects and return diff in seconds
     *
     * @param RTime $what
     * @param RTime $against
     * @return int
     */
    public static function timeDiff(RTime $what, RTime $against): int
    {
        return (int)self::toSeconds($what) - self::toSeconds($against);
    }


    /**
     * Convert RTime object to seconds
     *
     * @param RTime $time
     * @return int
     */
    public static function toSeconds(RTime $time): int
    {
        return (int)($time->getHours() * 3600) + ($time->getMinutes() * 60) + $time->getSeconds();
    }


}