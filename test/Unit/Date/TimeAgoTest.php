<?php

namespace CommentarTest\Date;

use Commentar\Date\TimeAgo;

class TimeAgoTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers Commentar\Date\TimeAgo::__construct
     */
    public function testConstructCorrectInstance()
    {
        $timeAgo = new TimeAgo(new \DateTime('1970-01-01 00:00:00'));

        $this->assertInstanceOf('\\Commentar\\Date\\TimeAgo', $timeAgo);
    }

    /**
     * @covers Commentar\Date\TimeAgo::__construct
     * @covers Commentar\Date\TimeAgo::getFormattedTimestamp
     * @covers Commentar\Date\TimeAgo::calculate
     * @covers Commentar\Date\TimeAgo::renderTextualDate
     */
    public function testGetFormattedTimestampSingleSecondZeroDifference()
    {
        $timeAgo = new TimeAgo(new \DateTime('now'));

        $this->assertSame('1 second ago', $timeAgo->getFormattedTimestamp(true));
    }

    /**
     * @covers Commentar\Date\TimeAgo::__construct
     * @covers Commentar\Date\TimeAgo::getFormattedTimestamp
     * @covers Commentar\Date\TimeAgo::calculate
     * @covers Commentar\Date\TimeAgo::renderTextualDate
     */
    public function testGetFormattedTimestampSingleSecond()
    {
        $target = new \DateTime('now');
        $target->sub(new \DateInterval('PT1S'));

        $timeAgo = new TimeAgo($target);

        $this->assertSame('1 second ago', $timeAgo->getFormattedTimestamp());
    }

    /**
     * @covers Commentar\Date\TimeAgo::__construct
     * @covers Commentar\Date\TimeAgo::getFormattedTimestamp
     * @covers Commentar\Date\TimeAgo::calculate
     * @covers Commentar\Date\TimeAgo::renderTextualDate
     */
    public function testGetFormattedTimestampMultipleSeconds()
    {
        $target = new \DateTime('now');
        $target->sub(new \DateInterval('PT30S'));

        $timeAgo = new TimeAgo($target);

        $this->assertSame('30 seconds ago', $timeAgo->getFormattedTimestamp(true));
    }

    /**
     * @covers Commentar\Date\TimeAgo::__construct
     * @covers Commentar\Date\TimeAgo::getFormattedTimestamp
     * @covers Commentar\Date\TimeAgo::calculate
     * @covers Commentar\Date\TimeAgo::renderTextualDate
     */
    public function testGetFormattedTimestampSingleMinute()
    {
        $target = new \DateTime('now');
        $target->sub(new \DateInterval('PT60S'));

        $timeAgo = new TimeAgo($target);

        $this->assertSame('1 minute ago', $timeAgo->getFormattedTimestamp());
    }

    /**
     * @covers Commentar\Date\TimeAgo::__construct
     * @covers Commentar\Date\TimeAgo::getFormattedTimestamp
     * @covers Commentar\Date\TimeAgo::calculate
     * @covers Commentar\Date\TimeAgo::renderTextualDate
     */
    public function testGetFormattedTimestampMultipleMinutes()
    {
        $target = new \DateTime('now');
        $target->sub(new \DateInterval('PT2M'));

        $timeAgo = new TimeAgo($target);

        $this->assertSame('2 minutes ago', $timeAgo->getFormattedTimestamp());
    }

    /**
     * @covers Commentar\Date\TimeAgo::__construct
     * @covers Commentar\Date\TimeAgo::getFormattedTimestamp
     * @covers Commentar\Date\TimeAgo::calculate
     * @covers Commentar\Date\TimeAgo::renderTextualDate
     */
    public function testGetFormattedTimestampSingleHour()
    {
        $target = new \DateTime('now');
        $target->sub(new \DateInterval('PT1H'));

        $timeAgo = new TimeAgo($target);

        $this->assertSame('1 hour ago', $timeAgo->getFormattedTimestamp());
    }

    /**
     * @covers Commentar\Date\TimeAgo::__construct
     * @covers Commentar\Date\TimeAgo::getFormattedTimestamp
     * @covers Commentar\Date\TimeAgo::calculate
     * @covers Commentar\Date\TimeAgo::renderTextualDate
     */
    public function testGetFormattedTimestampMultipleHours()
    {
        $target = new \DateTime('now');
        $target->sub(new \DateInterval('PT2H'));

        $timeAgo = new TimeAgo($target);

        $this->assertSame('2 hours ago', $timeAgo->getFormattedTimestamp());
    }

    /**
     * @covers Commentar\Date\TimeAgo::__construct
     * @covers Commentar\Date\TimeAgo::getFormattedTimestamp
     * @covers Commentar\Date\TimeAgo::calculate
     * @covers Commentar\Date\TimeAgo::renderTextualDate
     */
    public function testGetFormattedTimestampSingleDay()
    {
        $target = new \DateTime('now');
        $target->sub(new \DateInterval('P1D'));

        $timeAgo = new TimeAgo($target);

        $this->assertSame('yesterday', $timeAgo->getFormattedTimestamp());
    }

    /**
     * @covers Commentar\Date\TimeAgo::__construct
     * @covers Commentar\Date\TimeAgo::getFormattedTimestamp
     * @covers Commentar\Date\TimeAgo::calculate
     * @covers Commentar\Date\TimeAgo::renderTextualDate
     */
    public function testGetFormattedTimestampMultipleDays()
    {
        $target = new \DateTime('now');
        $target->sub(new \DateInterval('P2D'));

        $timeAgo = new TimeAgo($target);

        $this->assertSame('2 days ago', $timeAgo->getFormattedTimestamp());
    }

    /**
     * @covers Commentar\Date\TimeAgo::__construct
     * @covers Commentar\Date\TimeAgo::getFormattedTimestamp
     * @covers Commentar\Date\TimeAgo::calculate
     * @covers Commentar\Date\TimeAgo::renderTextualDate
     */
    public function testGetFormattedTimestampSingleWeek()
    {
        $target = new \DateTime('now');
        $target->sub(new \DateInterval('P1W'));

        $timeAgo = new TimeAgo($target);

        $this->assertSame('1 week ago', $timeAgo->getFormattedTimestamp());
    }

    /**
     * @covers Commentar\Date\TimeAgo::__construct
     * @covers Commentar\Date\TimeAgo::getFormattedTimestamp
     * @covers Commentar\Date\TimeAgo::calculate
     * @covers Commentar\Date\TimeAgo::renderTextualDate
     */
    public function testGetFormattedTimestampMultipleWeeks()
    {
        $target = new \DateTime('now');
        $target->sub(new \DateInterval('P2W'));

        $timeAgo = new TimeAgo($target);

        $this->assertSame('2 weeks ago', $timeAgo->getFormattedTimestamp());
    }

    /**
     * @covers Commentar\Date\TimeAgo::__construct
     * @covers Commentar\Date\TimeAgo::getFormattedTimestamp
     * @covers Commentar\Date\TimeAgo::calculate
     * @covers Commentar\Date\TimeAgo::renderTextualDate
     */
    public function testGetFormattedTimestampSingleMonth()
    {
        $target = new \DateTime('now');
        $target->sub(new \DateInterval('P1M'));

        $timeAgo = new TimeAgo($target);

        $this->assertSame('1 month ago', $timeAgo->getFormattedTimestamp());
    }

    /**
     * @covers Commentar\Date\TimeAgo::__construct
     * @covers Commentar\Date\TimeAgo::getFormattedTimestamp
     * @covers Commentar\Date\TimeAgo::calculate
     * @covers Commentar\Date\TimeAgo::renderTextualDate
     */
    public function testGetFormattedTimestampMultipleMonths()
    {
        $target = new \DateTime('now');
        $target->sub(new \DateInterval('P2M'));

        $timeAgo = new TimeAgo($target);

        $this->assertSame('2 months ago', $timeAgo->getFormattedTimestamp());
    }

    /**
     * @covers Commentar\Date\TimeAgo::__construct
     * @covers Commentar\Date\TimeAgo::getFormattedTimestamp
     * @covers Commentar\Date\TimeAgo::calculate
     * @covers Commentar\Date\TimeAgo::renderTextualDate
     */
    public function testGetFormattedTimestampSingleYear()
    {
        $target = new \DateTime('now');
        $target->sub(new \DateInterval('P1Y'));

        $timeAgo = new TimeAgo($target);

        $this->assertSame('1 year ago', $timeAgo->getFormattedTimestamp());
    }

    /**
     * @covers Commentar\Date\TimeAgo::__construct
     * @covers Commentar\Date\TimeAgo::getFormattedTimestamp
     * @covers Commentar\Date\TimeAgo::calculate
     * @covers Commentar\Date\TimeAgo::renderTextualDate
     */
    public function testGetFormattedTimestampMultipleYears()
    {
        $target = new \DateTime('now');
        $target->sub(new \DateInterval('P22M'));

        $timeAgo = new TimeAgo($target);

        $this->assertSame('2 years ago', $timeAgo->getFormattedTimestamp());
    }
}
