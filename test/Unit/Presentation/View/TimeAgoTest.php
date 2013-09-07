<?php

namespace CommentarTest\Presentation\View;

use Commentar\Presentation\View\TimeAgo;

class TimeAgoTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers Commentar\Presentation\View\TimeAgo::__construct
     */
    public function testConstructCorrectAbstractInstance()
    {
        $view = new TimeAgo(
            new \Commentar\Presentation\ThemeLoader('1970-01-01 00:00:00'),
            $this->getMock('\\Commentar\\ServiceBuilder\\Builder')
        );

        $this->assertInstanceOf('\\Commentar\\Presentation\\View\\View', $view);
    }

    /**
     * @covers Commentar\Presentation\View\TimeAgo::__construct
     */
    public function testConstructCorrectInstance()
    {
        $view = new TimeAgo(
            new \Commentar\Presentation\ThemeLoader('1970-01-01 00:00:00'),
            $this->getMock('\\Commentar\\ServiceBuilder\\Builder')
        );

        $this->assertInstanceOf('\\Commentar\\Presentation\\View\\TimeAgo', $view);
    }

    /**
     * @covers Commentar\Presentation\View\TimeAgo::__construct
     * @covers Commentar\Presentation\View\TimeAgo::renderTemplate
     */
    public function testRenderTemplate()
    {
        $service = $this->getMock('\\Commentar\\Date\\TimeAgo', ['getFormattedTimestamp'], [new \DateTime('1970-01-01 00:00:00')]);
        $service->expects($this->any())
            ->method('getFormattedTimestamp')
            ->will($this->returnValue(true));

        $factory = $this->getMock('\\Commentar\\ServiceBuilder\\Builder');
        $factory->expects($this->any())
            ->method('build')
            ->will($this->returnValue($service));

        $view = new TimeAgo(
            new \Commentar\Presentation\ThemeLoader('1970-01-01 00:00:00'),
            $factory,
            ['timestamp' => new \DateTime('1970-01-01 00:00:00')]
        );

        $view->renderTemplate();

        $this->assertTrue($view->formattedTimestamp);
    }
}
