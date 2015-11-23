<?php

/**
 *
 * @see XenForo_DataWriter_User
 */
class ThemeHouse_NoPasswordUser_Extend_XenForo_DataWriter_User extends XFCP_ThemeHouse_NoPasswordUser_Extend_XenForo_DataWriter_User
{

    /**
     *
     * @see XenForo_DataWriter_User::_preSave()
     */
    protected function _preSave()
    {
        if ($this->getOption(self::OPTION_ADMIN_EDIT) && $this->isInsert() && !$this->get('password')) {
            $auth = XenForo_Authentication_Abstract::create('XenForo_Authentication_NoPassword');
            $this->set('scheme_class', $auth->getClassName());
            $this->set('data', $auth->generate(''), 'xf_user_authenticate');
        }

        parent::_preSave();
    } /* END _preSave */
}