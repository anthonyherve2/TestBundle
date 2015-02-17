<?php
namespace AnthonyHerve\TestBundle\Composer;

use Composer\Script\CommandEvent;

class ScriptHandler {

    public static function initializeBundle(CommandEvent $event)
    {
        $event->getIO()->write("initializeBundle command launch");
    }


}