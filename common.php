<?php
//common.php

/**
 * common.php contains the functions for passphrase.php
 * 
 *
 * @package session-passphrase
 * @author Jenny Crimp 
 * @version 1.0 2015/07/24 
 * @link http://madebyjennycrimp.com/itc260/session-start
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see passphrase.php
 * @see index.php
 * @todo none
 */
 
/**
 * Displays a form that takes a pre-determined passphrase and provides a feedback message if passphrase is incorrect.
 *
 * @param $message string is an error message this is displayed inside span tags. Set $message to "" to display no error message.
 * @return $myForm string
 * @todo none
 */
function ShowForm($message){
    $myForm= '
    <form action="' . THIS_PAGE . '" method="post">
        Password: <input type = "password" name="password"><span> '. $message . '</span><br/>
        <input type="submit" name="submit" value="Enter Password">
        
    </form>
    ';
    return $myForm;
}