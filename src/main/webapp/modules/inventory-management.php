<?php
const ROOT_PATH = '../';
include ROOT_PATH ."php/gzip.php";
include ROOT_PATH ."rack-track-site.php";
$siteTags = ROOT_PATH ."tags/site-tags/";
$siteTitle = ROOT_PATH ."tags/site-title/";
$siteComponent = ROOT_PATH ."tags/site-components/";
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
    <title><?php echo $siteObject->getFeaturesMenuArray()['ariaLabel'][2]; ?></title>
</head>
<?php
    $_SESSION['strMainMenu'] = $siteObject->getFeaturesPage()['ariaLabel'][0];
    $_SESSION['strSubMenu'] = $siteObject->getFeaturesMenuArray()['ariaLabel'][2];
?>
<body>
<?php include($siteTags.'header.php');?>
<?php includeWithVariables($siteTags.'hero.php',
    array('h3' => $siteObject->getFeaturesMenuArray()['ariaLabel'][2],
        'title' => 'Rack Track a cloud-based SaaS product',
        'heroClass' => 'hero-green',
        'paddingClass' => 'pt-5',
        'imgSrc' => '/images/hero/inventory-management.png',
        'heroContent' => $siteObject->getFeaturesMenuArray()['content'][2])); ?>
<?php include($siteTags.'main-start.php');?>

<div class="tab-container">
<?php includeWithVariables($siteComponent.'feature-header.php',
    array('h1' => $siteObject->getFeaturesMenuArray()['ariaLabel'][2],
        'paddingClass' => 'pt-3',
        'submenuId' => 'getFeaturesInventoryManagementMenuArray')); ?>
<div class="page-layout">
    <div class="row row-cols-1 g-0">
        <div class="col">
            <div data-tabname="<?php echo $siteObject->getFeaturesInventoryManagementMenuArray()['tabName'][0]; ?>" class="tab-content">
                <aside aria-label="<?php echo $siteObject->getFeaturesInventoryManagementMenuArray()['ariaLabel'][0]; ?>">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <h2>Device Details</h2>
                            <p>Track all necessary information on a device from a managerial perspective. Our detailed reports provide Network, Configuration, and Miscellaneous information logged on the device.</p>
                            <ul>
                                <li>Keep track of Serial Numbers and Asset Tags.</li>
                                <li>Stay up to date on network connectivity management interfaces.</li>
                                <li>See who last configured the device through Rack Track with user interaction logging.</li>
                            </ul>
                        </div><?php #end col-lg-7 ?>

                        <div class="col-12 col-lg-5">
                            <div>
                                <img src="images/features/inventory-management/img.png" width="931" height="920" alt="<?php echo $siteObject->getFeaturesInventoryManagementMenuArray()['ariaLabel'][0]; ?>" class="img-fluid image-button" />
                            </div>
                        </div><?php #end col-lg-5 ?>
                    </div><?php #row ?>
                </aside>
            </div><?php #end data-content ?>
            <div data-tabname="<?php echo $siteObject->getFeaturesInventoryManagementMenuArray()['tabName'][1]; ?>" class="tab-content">
                <aside aria-label="<?php echo $siteObject->getFeaturesInventoryManagementMenuArray()['ariaLabel'][1]; ?>">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <h2>Remove QAMs</h2>
                            <p>Loose a deployed device? Not a problem for Rack Track. With our Sparring System we are able to inform you where the nearest device is down to the rack unit it is mounted in.</p>
                            <ul>
                                <li>Oversee unused inventory for safety.</li>
                                <li>Monitor where offline devices are being stored.</li>
                                <li>Get direct access to the nearest replaceable device within your roster.</li>
                            </ul>
                        </div><?php #end col-lg-7 ?>

                        <div class="col-12 col-lg-5">
                            <div>
                                <img src="images/features/inventory-management/img_1.png" width="1245" height="901" alt="<?php echo $siteObject->getFeaturesInventoryManagementMenuArray()['ariaLabel'][1]; ?>" class="img-fluid image-button" />
                            </div>
                        </div><?php #end col-lg-5 ?>
                    </div><?php #row ?>
                </aside>
            </div><?php #end data-content ?>
        </div><?php #end col-md-8 ?>
    </div><?php #row ?>
</div><?php #page-layout ?>
</div><?php #end tab-container ?>
<?php includeWithVariables($siteComponent.'feature-footer-button.php',
    array('p' => "Need a Custom Feature? - some other text",
        'paddingClass' => 'py-3',
        'href' => $siteObject->getFeaturesMenuArray()['href'][2],
        'text' => 'Case Study Report')); ?>
<?php include($siteTags.'main-end.php');?>
<?php include($siteTags.'footer.php');?>
<?php include($siteComponent.'modal.php');?>
</body>
</html>