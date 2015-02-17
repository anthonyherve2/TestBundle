<?php
namespace AnthonyHerve\TestBundle\Composer;

class ScriptHandler {

    public static function initializeBundle(CommandEvent $event)
    {
        $event->getIO()->write("initializeBundle command launch");
    }


}