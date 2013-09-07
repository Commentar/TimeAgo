TimeAgo
=

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
