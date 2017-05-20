<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

// Define some constants that let us set up some environment variables:
// (eg. siteUrl)
define('URI_SCHEME', (isset($_SERVER['HTTPS'] ) ) ? "https://" : "http://");
define('SITE_URL',    URI_SCHEME.$_SERVER['SERVER_NAME']);

return array(

  // Defaults for all environments:
  '*' => array(
    'devMode' => false,
    'omitScriptNameInUrls' => true,
    'siteUrl'  => array(
      'en_us' => 'http://craft.dev/',
      'he' => 'http://craft.dev/he/',
    ),
  ),

  // Dev site configuration:
  '.dev' => array(
    'devMode' => true,
    // In dev mode we always want to see the latest changes to a template:
    'enableTemplateCaching' => false,

    'siteUrl'  => array(
      'en_us' => 'http://craft.dev/',
      'he' => 'http://craft.dev/he/',
    ),
  ),

  '.co' => array(
    'devMode' => true,
    // In dev mode we always want to see the latest changes to a template:
    'enableTemplateCaching' => false,

    'siteUrl'  => array(
      'en_us' => 'http://oz-productions.co/',
      'he' => 'http://oz-productions.co/he/',
    ),
  ),

);
