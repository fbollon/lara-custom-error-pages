<?php

// config for Fbollon/LaraCustomErrorPages
return [

    /** Custom header to include
     * for example to allow you to use your own fonts and css
     *
     * 'custom_header' => 'layouts.partials.header',
     *
     */

    'custom_header' => null,

    /** to display an autorefresh message and a countdown */
    'autorefresh' => [
        /** error numbers for which you want an autorefresh to reload the page */
        'errors' => [
            503,
        ],
        /** autorefresh interval in seconds */
        'interval' => 121
    ]
];
