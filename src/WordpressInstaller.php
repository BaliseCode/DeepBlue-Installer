<?php
namespace Balise\DeepblueInstaller;

use Composer\Installers\BaseInstaller as BaseInstaller;
use Composer\IO\IOInterface;
use Composer\Composer;
use Composer\Package\PackageInterface;

class WordPressInstaller extends BaseInstaller {
    protected $root;
    public function __construct(PackageInterface $package = null, Composer $composer = null, IOInterface $io = null)  {
        $topExtra = $composer->getPackage()->getExtra();
        $this->root = $topExtra["public-folder"];
        parent::__construct($package,$composer,$io);
    }
/**
     * Gets the installer's locations
     *
     * @return array
     */
    public function getLocations()
    {
        return array(
        'plugin'   => $this->root.'/app/plugins/{$name}/',
        'theme'    => $this->root.'/app/themes/{$name}/',
        'muplugin' => $this->root.'/app/mu-plugins/{$name}/',
        'dropin'   => $this->root.'/app/{$name}/',
    );
    }
}
 