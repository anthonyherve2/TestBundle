<?php
/**
 * Created by PhpStorm.
 * User: aherve
 * Date: 17/02/2015
 * Time: 16:35
 */

class ScriptHandler {

    public static function initializeBundle(CommandEvent $event)
    {
        $event->getIO()->write("initializeBundle command launch");
    }


}