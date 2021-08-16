<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/lanxian-portal-config/src/SmartyConfig/Ll',
            S_ROOT.'vendor/qixinyun/lanxian-portal-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/lanxian-portal-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
