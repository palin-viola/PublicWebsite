<?php
include "php/gzip.php";
$siteTags = "tags/site-tags/";
$siteTitle = "tags/site-title/";
$siteAdvert = "tags/site-advert/";
    include $siteTags."cache.php";
    include "rack-track-site.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include($siteTags.'includes.php');
        $siteObject = new RackTrackSite();
        $siteObject->setKeywords('Inventory Management system,cloud-based SaaS product,  geolocation/GPS location, Fast Global Search, Dashboard, Regional Mapping');
    ?>
    <meta name="description" content="<?php echo $siteObject->getDescription(); ?>"/>
    <meta name="keywords" content="<?php echo $siteObject->getKeywords(); ?>" />
    <title><?php echo $siteObject->getTitle(); ?></title>
</head>
<?php
    $_SESSION['strMainMenu'] = 'About Rack Track';
?>
<body>
    <?php include($siteTags.'header.php');?>
    <?php includeWithVariables($siteTags.'hero.php',
        array('h2' => 'Stay on Track',
        'h3' => 'With Rack Track',
        'title' => 'Rack Track a cloud-based SaaS product',
        'heroClass' => 'hero-blue',
        'paddingClass' => 'pt-5',
        'imgSrc' => '/images/hero/home.png',
        'heroContent' => 'The comprehensive inventory management system for your physical services. Our global system allows for you to have a real-time view of your centralized data.')); ?>
    <?php include($siteTags.'main-start.php');?>
    <?php includeWithVariables($siteTitle.'page-title.php', array('h1' => 'Rack Track Features')); ?>
    <?php include($siteAdvert.'advert-home.php');?>
    <?php include($siteAdvert.'advert-features.php');?>
    <?php include($siteTags.'main-end.php');?>
    <?php include($siteTags.'footer.php');?>
</body>
</html>