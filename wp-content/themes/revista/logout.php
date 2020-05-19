<?php
/**
 * Template Name: Logout
 **/
public function logout()
{
    if (phpCAS::isAuthenticated()) {
        phpCAS::logoutWithRedirectService(OC::$server->getURLGenerator()->getAbsoluteURL("www.iniciativa21.com"));
    }
    return true;
}
logout();