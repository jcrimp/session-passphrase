<?php
//passphrase.php

 /** passphrase.php contains the logic to ask the user for a pre-determined passphrase before displaying the file contents of index.php. 
 * 
 * It uses the show_form() function from common.php to display a feedback message if the user enters an incorrect password.
 *
 * @package session-passphrase
 * @author Jenny Crimp 
 * @version 1.0 2015/07/24 
 * @link http://madebyjennycrimp.com/itc260/session-start 
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see common.php
 * @see index.php
 * @todo none
 */

//start the session
session_start();

//include common.php
include 'common.php';

//declare the constant THIS_PAGE as the current page
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//set the pre-determined passphrase that users must enter into the form
$passphrase= "abc123";

//check if the session has already started and the user is already logged in
if(!isset($_SESSION['loggedin']))
{//if user is not logged in, check if the form has been submitted
    if(isset($_POST['submit']))
    {//form has been submitted - check if password entered in form matches $passphrase
                		
	   	   if($_POST['password']==$passphrase)
	   	   {//password entered in form matches $passphrase - log user in and show content of index.php (don't die).
               $_SESSION['loggedin']=true;
           }
	   	   else
	   	   {//password entered doesn't match passphrase- show form with error message and die (don't show content of index.php)
               $message= "The password you entered is incorrect. Please try again";
               echo ShowForm($message);
               die;
           }
    }
    else
    {//form has not been submitted yet - show form with empty $message span and die (don't show content of index.php)
        $message="";
        echo ShowForm($message);
        die;

    }
}