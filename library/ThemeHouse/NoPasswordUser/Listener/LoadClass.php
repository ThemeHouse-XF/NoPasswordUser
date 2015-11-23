<?php

class ThemeHouse_NoPasswordUser_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_NoPasswordUser' => array(
                'datawriter' => array(
                    'XenForo_DataWriter_User'
                ), /* END 'datawriter' */
            ), /* END 'ThemeHouse_NoPasswordUser' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassDataWriter($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_NoPasswordUser_Listener_LoadClass', $class, $extend, 'datawriter');
    } /* END loadClassDataWriter */
}