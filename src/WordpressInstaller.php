<?php
namespace Balise\DeepblueInstaller;

class WordPressInstaller extends BaseInstaller {
    public function __construct()  {
       echo dirname(__DIR__);
        parent::__construct();
    }
    protected $locations = array(
        'plugin'   => 'app/wp-content/plugins/{$name}/',
        'theme'    => 'app/wp-content/themes/{$name}/',
        'muplugin' => 'app/wp-content/mu-plugins/{$name}/',
        'dropin'   => 'app/wp-content/{$name}/',
    );
}
 