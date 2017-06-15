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

c::set('license', 'K2-PERSONAL-f199466bc8167ef28659dd2da0596879');
c::set('debug', false);
c::set('ssl',true);
c::set('timezone','MST');
c::set('plugin.ga.id', 'UA-39674942-5');
c::set('plugin.ga', true);
c::set('plugin.ga.blacklist', [ 'seths-macbook-pro.local:5757', 'localhost:8888', '::1' ] );
c::set('plugin.ga.debug', false);
c::set('plugin.ga.snippet', 'ga');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/
