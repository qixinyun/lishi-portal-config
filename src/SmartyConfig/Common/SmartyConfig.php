<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/lishi-portal-config/src/SmartyConfig/Ls',
            S_ROOT.'vendor/qixinyun/lishi-portal-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/lishi-portal-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
