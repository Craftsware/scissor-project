<?php

/**
 * Scissor (http://craftsware.net/scissor)
 *
 * @author    Ruel Mindo
 * @link      https://github.com/craftsware/scissor
 * @license   https://github.com/craftsware/scissor/LICENSE.md (MIT License)
 * @copyright Copyright (c) 2017 Ruel Mindo
 * @since     0.0.1
 * 
 */

namespace App;


use Composer\Factory;
use Composer\IO\IOInterface;
use Composer\Json\JsonFile;
use Composer\Script\Event;


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
            'autoload': [
                'psr-4': [
                    'App\\': 'App'
                ]
            ]
        ]);

        $io->write("<info>composer.json for Test created.\n</info>");
    }

}