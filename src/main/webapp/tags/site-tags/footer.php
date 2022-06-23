<?php
$siteRoot = $_SERVER['DOCUMENT_ROOT'];
$siteFooter = $siteRoot."/tags/site-footer/";
?>
<footer id="site-footer" aria-label="contentInfo" role="contentinfo">
    <?php
        include($siteFooter."footer-help-wrapper.php");
        include($siteFooter."footer-menu.php");
        include($siteFooter."footer-copyright.php");
    ?>
</footer>