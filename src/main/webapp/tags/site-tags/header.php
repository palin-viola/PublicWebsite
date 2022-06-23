<?php
$siteRoot = $_SERVER['DOCUMENT_ROOT'];
$siteHeader = $siteRoot."/tags/site-header/";
?>
<header class="header shadow-sm" aria-label="header" role="banner">
<?php
    include($siteHeader."skip-to-main.php");
    include($siteHeader."top-nav.php");
?>
</header>