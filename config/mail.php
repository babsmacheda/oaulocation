<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Mail Driver
    |--------------------------------------------------------------------------
    |
    | Laravel supports both SMTP and PHP's "mail" function as drivers for the
    | sending of e-mail. You may specify which one you're using throughout
    | your application here. By default, Laravel is setup for SMTP mail.
    |
    | Supported: "smtp", "mail", "sendmail", "mailgun", "mandrill", "log"
    |
    */

    'driver' => "mailgun",

    'host' => "smtp.mailgun.org",

    'port' => 587,

    'from' => ['address' => 'babsmacheda@oaulocations.com', 'name' => ucwords(config('app.name'))." Support"],

    'encryption' => 'tls',

    'username' => null,

    'password' => null,

    'sendmail' => '/usr/sbin/sendmail -bs',

    'pretend' => false,

];
