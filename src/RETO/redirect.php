
<?php
// Analize session
require_once('Session/Utils/SessionUtils.php');
// Redirects to login page in public views or private views
if (isset($_POST['user'])) {
    startSessionIfNotStarted();
    setSession($_POST['user']);
}
if(loggedIn())
{
    startSessionIfNotStarted();
    $_SESSION["logged"] = "true";
    header("Location: index.php");
}
else
{
    startSessionIfNotStarted();
    $_SESSION["logged"] = "false";
    header("Location: index.php");
}
?>