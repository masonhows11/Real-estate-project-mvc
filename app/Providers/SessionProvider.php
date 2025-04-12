<?php

namespace App\Providers;

class SessionProvider extends Provider
{

    #[\Override] public function boot(): void
    {
        ob_start();
        session_start();

        //// ready for save new data for first time
        //// or on every request
        if (isset($_SESSION['old'])) {
            unset($_SESSION['temporary_old']);
        }
        if (isset($_SESSION['old'])) {
            $_SESSION['temporary_old'] = $_SESSION['old'];
            unset($_SESSION['old']);
        }


        //// ready for save new data for first time
        //// or on every request
        if (isset($_SESSION['temporary_flash'])) {
            unset($_SESSION['temporary_flash']);
        }
        if (isset($_SESSION['flash'])) {
            $_SESSION['temporary_flash'] = $_SESSION['flash'];
            unset($_SESSION['flash']);
        }

        //// ready for save new data for first time
        //// or on every request
        if (isset($_SESSION['temporary_error'])) {
            unset($_SESSION['temporary_error']);
        }
        if (isset($_SESSION['error'])) {
            $_SESSION['temporary_error'] = $_SESSION['error'];
            unset($_SESSION['error']);
        }

        $params = [];
        $params = !isset($_GET) ? $params : array_merge($params,$_GET);
        $params = !isset($_POST) ? $params : array_merge($params,$_POST);
        $_SESSION['old'] = $params;
        unset($params);
    }
}