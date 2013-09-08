<?php
/**
 * Displays the time since the provided timestamp (DateTime object)
 *
 * PHP version 5.4
 *
 * @category   Commentar
 * @package    Date
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2013 Pieter Hordijk
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */
namespace Commentar\Date;

/**
 * Displays the time since the provided timestamp (DateTime object)
 *
 * @category   Commentar
 * @package    Date
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 */
class TimeAgo
{
    /**
     * @var \DateTime Tmestamp object
     */
    private $timestamp;

    /**
     * Creates instance
     *
     * @param \DateTime $timestamp The timestamp from which to calculate the time since
     */
    public function __construct(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * Gets the time since the timestamp
     *
     * @return string The time since the timestamp
     */
    public function getFormattedTimestamp()
    {
        return $this->calculate();
    }

    /**
     * Calculates the time since the timestamp
     *
     * @return string The time since the timestamp
     */
    private function calculate()
    {
        $difference = (new \DateTime('now'))->getTimestamp() - $this->timestamp->getTimestamp();

        if ($difference <= 1) {
            return '1 second ago';
        } elseif ($difference < 60) {
            return $difference . ' seconds ago';
        } elseif ($difference === 60) {
            return '1 minute ago';
        } elseif ($difference < 3600) {
            return floor($difference / 60). ' minutes ago';
        } elseif ($difference === 3600) {
            return '1 hour ago';
        } elseif ($difference < 86400) {
            return floor($difference / 60 / 60) . ' hours ago';
        } elseif ($difference === 86400) {
            return 'yesterday';
        } elseif ($difference < 604800) {
            return floor($difference / 60 / 60 / 24) . ' days ago';
        } elseif ($difference === 604800) {
            return '1 week ago';
        } elseif ($difference < 2678400) {
            return floor($difference / 60 / 60 / 24 / 7) . ' weeks ago';
        } elseif ($difference === 2678400) {
            return '1 month ago';
        } elseif ($difference < 31536000) {
            return floor($difference / 60 / 60 / 24 / 31) . ' months ago';
        } elseif ($difference === 31536000) {
            return '1 year ago';
        } else {
            return floor($difference / 60 / 60 / 24 / 365) . ' years ago';
        }
    }
}
