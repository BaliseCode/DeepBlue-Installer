<?php

namespace Balise\DeepblueInstaller;

use Composer\Composer;
use Composer\Installer\BinaryInstaller;
use Composer\Installer\LibraryInstaller;
use Composer\IO\IOInterface;
use Composer\Package\PackageInterface;
use Composer\Repository\InstalledRepositoryInterface;
use Composer\Util\Filesystem;

class Installer extends LibraryInstaller {

    /**
     * Package types to installer class map
     *
     * @var array
     */
    private $supportedTypes = array(
        'wordpress'     => 'WordPressInstaller',
    );


    /**
     * Get I/O object
     *
     * @return IOInterface
     */
    private function getIO() {
        return $this->io;
    }
}
