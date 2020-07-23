<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/taiyuan-portal-config/src/SmartyConfig/Ty',
            S_ROOT.'vendor/qixinyun/taiyuan-portal-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/taiyuan-portal-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
