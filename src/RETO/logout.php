<?php
require_once('Session/Utils/SessionUtils.php');
startSessionIfNotStarted();
destroySession();
header('Location: login.php');
?>