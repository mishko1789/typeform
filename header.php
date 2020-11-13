<?php

$days = 30;
$expire = mktime(0, 0, 0, date("m"), date("d") + $days, date("Y"));
$refresh = false;

$utmCode = array(
    'utm_campaign' => null,
    'utm_medium' => null,
    'utm_source' => null,
    'utm_term' => null,
    'utm_content' => null
);

if (isset($_GET["utm_campaign"]) && $_GET["utm_campaign"] != $_COOKIE["utm_campaign"]) {
    setcookie('utm_campaign', $_GET["utm_campaign"], $expire, "/");
    $utmCode["utm_campaign"] = $_GET["utm_campaign"];
    $refresh = true;
}
if (isset($_GET["utm_medium"]) && $_GET["utm_medium"] != $_COOKIE["utm_medium"]) {
    setcookie('utm_medium', $_GET["utm_medium"], $expire, "/");
    $utmCode["utm_medium"] = $_GET["utm_medium"];
    $refresh = true;
}
if (isset($_GET["utm_source"]) && $_GET["utm_source"] != $_COOKIE["utm_source"]) {
    setcookie('utm_source', $_GET["utm_source"], $expire, "/");
    $utmCode["utm_source"] = $_GET["utm_source"];
    $refresh = true;
}
if (isset($_GET["utm_term"]) && $_GET["utm_term"] != $_COOKIE["utm_term"]) {
    setcookie('utm_term', $_GET["utm_term"], $expire, "/");
    $utmCode["utm_term"] = $_GET["utm_term"];
    $refresh = true;
}
if (isset($_GET["utm_content"]) && $_GET["utm_content"] != $_COOKIE["utm_content"]) {
    setcookie('utm_content', $_GET["utm_content"], $expire, "/");
    $utmCode["utm_content"] = $_GET["utm_content"];
    $refresh = true;
}

if($refresh) {
    setcookie('utmCode', serialize($utmCode), $expire, "/");
}

?>