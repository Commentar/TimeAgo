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
        return '3 minutes ago';
    }
}
