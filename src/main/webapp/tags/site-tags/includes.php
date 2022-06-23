<?php
const LOCAL = "http://localhost/";
const WEB = "http://marketing2.rack-track.com/";
$siteRoot = LOCAL;

$siteObject = new RackTrackSite();
$sitePathImgFavIcon = $siteRoot.$siteObject->getFavIcon();

function includeWithVariables($filePath, $variables = array(), $print = true)
{
    $output = NULL;
    if (file_exists($filePath)) {
        // Extract the variables to a local namespace
        extract($variables);

        // Start output buffering
        ob_start();

        // Include the template file
        include $filePath;

        // End buffering and return its contents
        $output = ob_get_clean();
    }
    if ($print) {
        print $output;
    }
    return $output;
}
?>
<base href="<?php echo $siteRoot; ?>" />
<link rel="icon" type="image/png" sizes="64x64" href="<?php echo $sitePathImgFavIcon; ?>">
<link rel="apple-touch-icon" type="image/png" sizes="64x64" href="<?php echo $sitePathImgFavIcon; ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="initial-scale=1, width=device-width, shrink-to-fit=no, viewport-fit=cover">
<meta name="theme-color" content="<?php echo $siteObject->getThemeColor() ?>">
<meta charset="UTF-8">
<meta http-equiv="page-enter" content="blendTrans(Duration=0.2)"/>
<style>
    @import url("<?php echo $siteObject->getFontImport() ?>");
</style>
<link rel="stylesheet" href="<?php echo $siteObject->getCSSLib() ?>" type="text/css" media="all" />
<script src="<?php echo $siteObject->getDeferJSLib() ?>" defer async></script>