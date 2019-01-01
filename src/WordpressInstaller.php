<?php
namespace Balise\DeepblueInstaller;

class WordPressInstaller extends BaseInstaller {
    public function __construct()  {
       echo dirname(__DIR__);
        parent::__construct();
    }
    protected $locations = array(
        'plugin'   => 'wp-content/plugins/{$name}/',
        'theme'    => 'wp-content/themes/{$name}/',
        'muplugin' => 'wp-content/mu-plugins/{$name}/',
        'dropin'   => 'wp-content/{$name}/',
    );
}
