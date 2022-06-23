<?php
    include "php/gzip.php";
    include "rack-track-site.php";
    $siteTags = "tags/site-tags/";
    $siteTitle = "tags/site-title/";
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
    <title><?php echo $siteObject->getTermsMenuArray()['ariaLabel'][3]; ?></title>
</head>
<?php
$_SESSION['strMainMenu'] = 'Site Map';
?>
<body>
<?php include($siteTags.'header.php');?>
<?php include($siteTags.'main-start.php');?>
<?php includeWithVariables($siteTitle.'page-title.php', array('h1' => 'Rack Track Site Map')); ?>
<div class="page-layout py-5 sitemap">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col px-5">
            <h2>About Rack Track</h2>
            <ul>
                <li><a href="<?php echo $siteObject->getAboutPage()['href'][0]; ?>" aria-label="<?php echo $siteObject->getAboutPage()['ariaLabel'][0]; ?>"><?php echo $siteObject->getAboutPage()['text'][0]; ?></a></li>
                <li><a href="<?php echo $siteObject->getFaqPage()['href'][0]; ?>" aria-label="<?php echo $siteObject->getFaqPage()['ariaLabel'][0]; ?>"><?php echo $siteObject->getFaqPage()['text'][0]; ?></a></li>
                <li><a href="<?php echo $siteObject->getContactPage()['href'][0]; ?>" aria-label="<?php echo $siteObject->getContactPage()['ariaLabel'][0]; ?>"><?php echo $siteObject->getContactPage()['text'][0]; ?></a></li>
                <?php
                foreach($siteObject->getTermsMenuArray()['text'] as $k => $v) {
                    ?>
                    <li><a href="<?php echo $siteObject->getTermsMenuArray()['href'][$k]; ?>" aria-label="<?php echo $siteObject->getTermsMenuArray()['ariaLabel'][$k]; ?>"><?php echo $siteObject->getTermsMenuArray()['text'][$k]; ?></a></li>
                <?php  } ?>
            </ul>
        </div><?php #end col ?>

        <div class="col px-5">
            <h2>Features</h2>
            <ul>
                <li><a href="<?php echo $siteObject->getFeaturesPage()['href'][0]; ?>" aria-label="<?php echo $siteObject->getFeaturesPage()['ariaLabel'][0].' Menu'; ?>"><?php echo $siteObject->getFeaturesPage()['text'][0]; ?></a>
                    <ul class="sitemap-sub-menu" aria-label="submenu">
                        <?php
                        foreach($siteObject->getFeaturesMenuArray()['text'] as $k => $v)  {
                            ?>
                            <li><a href="<?php echo $siteObject->getFeaturesMenuArray()['href'][$k]; ?>" aria-label="<?php echo $siteObject->getFeaturesMenuArray()['ariaLabel'][$k]; ?>">
                                <span class="col-10 gridItem menuText">
                                    <?php echo $siteObject->getFeaturesMenuArray()['text'][$k]; ?>
                                </span>
                                </a>
                            </li>
                        <?php  } ?>
                    </ul>
                </li>
            </ul>
        </div><?php #end col ?>
    </div><?php #end row ?>
</div><?php #end page-layout ?>
<?php include($siteTags.'main-end.php');?>
<?php include($siteTags.'footer.php');?>
</body>
</html>