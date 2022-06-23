<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include ("rack-track-site.php");
    $siteTags = "tags/site-tags/";
    $siteTitle = "tags/site-title/";
    $siteAdvert = "tags/site-advert/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include($siteTags.'includes.php');
        $siteObject = new RackTrackSite();
    ?>
    <meta name="description" content="<?php echo $siteObject->getDescription(); ?>"/>
    <meta name="keywords" content="<?php echo $siteObject->getKeywords(); ?>" />
    <title><?php echo $siteObject->getTitle(); ?></title>
</head>
<?php
    $_SESSION['strMainMenu'] = 'About Rack Track';
//?>
<body>
    <?php include($siteTags.'header.php');?>
    <?php include($siteTags.'main-start.php');?>
    <?php include($siteTags.'main-end.php');?>
    <?php include($siteTags.'footer.php');?>
</body>
</html>