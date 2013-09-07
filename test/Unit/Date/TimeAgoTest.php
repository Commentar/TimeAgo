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
     */
    public function testGetFormattedTimestamp()
    {
        $timeAgo = new TimeAgo(new \DateTime('1970-01-01 00:00:00'));

        $this->assertSame('3 minutes ago', $timeAgo->getFormattedTimestamp());
    }
}
