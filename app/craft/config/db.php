<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(

  '*' => array(
    'server'    => 'localhost',
    'tablePrefix' => '',

    // Live DB credentials:
    'user'      => 'craft',
    'password'  => '123',
    'database'  => 'craft',
  ),

  '.dev' => array(
    // Dev DB credentials:
    'user'      => 'craft',
    'password'  => '123',
    'database'  => 'craft',
  ),

  '.co' => array(
    'server'    => 'internal-db.s127312.gridserver.com',
    'tablePrefix' => '',

    // Live DB credentials:
    'user'      => 'db127312_CRAFT',
    'password'  => 'oMCZRrvRDPx7KBkCpBkgH+A*',
    'database'  => 'db127312_OZ_CRAFT',
  ),

);


