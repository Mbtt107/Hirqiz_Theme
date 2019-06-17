<?php

namespace HirqizAddon\EventListener;

class CreateTemplate
{
    public static function preRender(\XF\Template\Templater $templater, &$type, &$template, &$name, array &$arguments, array &$globalVars)
    {
        if ($arguments['group']->group_id == 'Hirqiz_Addon')
        {
            $template = 'Hirqiz_Addon_option_menu';
        }
    }
}