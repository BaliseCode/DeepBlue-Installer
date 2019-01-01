<?php
namespace Balise\DeepblueInstaller;

use Composer\Installers\BaseInstaller as BaseInstaller;

class WordPressInstaller extends BaseInstaller {
    protected $locations = array(
        'plugin'   => 'wp-content/plugins/{$name}/',
        'theme'    => 'wp-content/themes/{$name}/',
        'muplugin' => 'wp-content/mu-plugins/{$name}/',
        'dropin'   => 'wp-content/{$name}/',
    );
}
