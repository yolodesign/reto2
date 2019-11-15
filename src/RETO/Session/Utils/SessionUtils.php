<?php

function startSessionIfNotStarted()
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
}

function destroySession()
{
    session_destroy();
}

function setSession($user)
{
    $_SESSION['user'] = $user;
}

function loggedIn()
{
    session_start([
        'cookie_lifetime' => 86400,
    ]);
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
        session_unset();
        session_destroy();
    }
    $_SESSION['LAST_ACTIVITY'] = time();
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
}

function getSession()
{
    return $_SESSION['user'];
}

