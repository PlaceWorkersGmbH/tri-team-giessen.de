<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

/*

---------------------------------------
Multi-Language support setup
---------------------------------------

If you want to run a site with multiple languages,
enable support for it here. As soon as you set

c::set('lang.support', true);

Kirby will automatically create language-dependent
URLs like:

http://yourdomain.com/en/blog

or

http://yourdomain.com/de/blog

Make sure to set the default language code and
also the available language codes.

If you keep…

c::set('lang.detect', true);

Kirby will try to detect the default language
from the user agent string instead of using the
default language.

*/

c::set('languages', array(
  array(
    'code'    => 'de',
    'name'    => 'Deutsch',
    'default' => true,
    'locale'  => 'de_DE',
    'url'     => '/',
  )
));

c::set('language.detect', true);
