<?php

/**
 * Scissor (http://craftsware.net/scissor-project)
 *
 * @author    Ruel Mindo
 * @link      https://github.com/craftsware/scissor-project
 * @license   https://github.com/craftsware/scissor-project/LICENSE.md (MIT License)
 * @copyright Copyright (c) 2017 Ruel Mindo
 * @since     1.0.0
 * 
 */

namespace App;


use Composer\Factory;
use Composer\Script\Event;
use Composer\Json\JsonFile;
use Composer\IO\IOInterface;


/**
 * Install
 *
 */
class Install {


    public static function preInstall(Event $event)
    {
        $io = $event->getIO();
        $json = new JsonFile(Factory::getComposerFile());

        $json->write([
            'name' => '',
            'require' => [
                'php' => '^7.1.3',
                'craftsware/scissor' => '^0.0.1'
            ],
            'autoload' => [
                'psr-4' => [
                    'App\\' => 'App'
                ]
            ]
        ]);

        $io->write("<info>Created composer.json for scissor project.\n</info>");

        // Remove after install
        unlink(__FILE__);
    }

}