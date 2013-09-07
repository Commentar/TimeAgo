TimeAgo
=

[![Build Status](https://travis-ci.org/Commentar/TimeAgo.png?branch=master)](https://travis-ci.org/Commentar/TimeAgo) [![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/Commentar/TimeAgo/badges/quality-score.png?s=e9a551f7f53423cdebc33dc530a6e89cb6ba58a1)](https://scrutinizer-ci.com/g/Commentar/TimeAgo/) [![Code Coverage](https://scrutinizer-ci.com/g/Commentar/TimeAgo/badges/coverage.png?s=822bbb46c79b752d4bfe94734c24ea4ca5da619f)](https://scrutinizer-ci.com/g/Commentar/TimeAgo/) [![Latest Stable Version](https://poser.pugx.org/Commentar/time-ago/v/stable.png)](https://packagist.org/packages/Commentar/time-ago) [![Total Downloads](https://poser.pugx.org/Commentar/time-ago/downloads.png)](https://packagist.org/packages/Commentar/time-ago)

Date renderer for the [Commentar][commentar] project. This package calculates the time since a specific `DateTime` object en displays it in a human readable format.

The supported steps are:

- seconds
- minutes
- hours
- days
- weeks
- months
- years

It is installed by default when first installing the [Commentar][commentar] system.

Installation
-

*If you are running a standard installation of Commentar you don't have to install anything (it is the default timestamp formatter of the system).*

Add the formatter to the project's `composer.json` file:

    "require": {
        "commentar/time-ago": "0.0.*",
    }

Use it in your templates:

    <?php echo $this->renderView('TimeAgo', ['timestamp' => $comment['updated']]); ?>

[commentar]:https://github.com/Commentar/Commentar
