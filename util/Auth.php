<?php
/**
 * 
 */
class Auth
{
    
    public static function handleLogin()
    {
        @session_start();
        $isAdmin = $_SESSION['Admin'];
        if ($isAdmin == false) {
            session_destroy();
            header('location:' . URL .'admincp');
            exit;
        }
    }
    
}