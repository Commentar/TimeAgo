<?php
/**
 * Displays the time since the provided timestamp (DateTime object)
 *
 * PHP version 5.4
 *
 * @category   Commentar
 * @package    Presentation
 * @subpackage View
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2013 Pieter Hordijk
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */
namespace Commentar\Presentation\View;

/**
 * Displays the time since the provided timestamp (DateTime object)
 *
 * @category   Commentar
 * @package    Presentation
 * @subpackage View
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 */
class TimeAgo extends View
{
    /**
     * Renders the template of the view
     *
     * @return string The rendered template
     */
    public function renderTemplate()
    {
        $timeAgoService = $this->serviceFactory->build(
            '\\Commentar\\Date\\TimeAgo',
            [$this->timestamp]
        );

        $this->formattedTimestamp = $timeAgoService->getFormattedTimestamp();

        return $this->getContent($this->theme->getFile('blocks/timestamp.phtml'));
    }
}
