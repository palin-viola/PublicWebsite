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
    <title><?php echo $siteObject->getFeaturesMenuArray()['ariaLabel'][3]; ?></title>
</head>
<?php
    $_SESSION['strMainMenu'] = $siteObject->getFeaturesPage()['ariaLabel'][0];
    $_SESSION['strSubMenu'] = $siteObject->getFeaturesMenuArray()['ariaLabel'][3];
?>
<body>
<?php include($siteTags.'header.php');?>
<?php includeWithVariables($siteTags.'hero.php',
    array('h3' => $siteObject->getFeaturesMenuArray()['ariaLabel'][3],
        'title' => 'Rack Track a cloud-based SaaS product',
        'heroClass' => 'hero-green',
        'paddingClass' => 'pt-5',
        'imgSrc' => '/images/hero/site-management.png',
        'heroContent' => $siteObject->getFeaturesMenuArray()['content'][3])); ?>
<?php include($siteTags.'main-start.php');?>

<div class="tab-container">
<?php includeWithVariables($siteComponent.'feature-header.php',
    array('h1' => $siteObject->getFeaturesMenuArray()['ariaLabel'][3],
        'paddingClass' => 'pt-3',
        'submenuId' => 'getFeaturesSiteManagementMenuArray')); ?>
<div class="page-layout">
    <div class="row row-cols-1 g-0">
        <div class="col">
            <div data-tabname="<?php echo $siteObject->getFeaturesSiteManagementMenuArray()['tabName'][0]; ?>" class="tab-content">
                <aside aria-label="<?php echo $siteObject->getFeaturesSiteManagementMenuArray()['ariaLabel'][0]; ?>">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <h2>Custom Regions</h2>
                            <p>Set up your sites location seamlessly with just an address and name to get started.</p>
                            <ul>
                                <li>Get a real time satellite view of your location upon submission.</li>
                                <li>Set location parameters with grid dimensions for specific location size.</li>
                            </ul>
                        </div><?php #end col-lg-7 ?>

                        <div class="col-12 col-lg-5">
                            <div>
                                <img src="images/features/site-management/img.png" width="1261" height="640" alt="<?php echo $siteObject->getFeaturesSiteManagementMenuArray()['ariaLabel'][0]; ?>" class="img-fluid image-button" />
                            </div>
                        </div><?php #end col-lg-5 ?>
                    </div><?php #row ?>
                </aside>
            </div><?php #end data-content ?>
            <div data-tabname="<?php echo $siteObject->getFeaturesSiteManagementMenuArray()['tabName'][1]; ?>" class="tab-content">
                <aside aria-label="<?php echo $siteObject->getFeaturesSiteManagementMenuArray()['ariaLabel'][1]; ?>">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <h2>Site Details</h2>
                            <p>Keep an eye on inventory space with our dynamic smart floor plans.</p>
                            <ul>
                                <li>See provisioned racks containing devices.</li>
                                <li>Get direct access to the contents of a rack with a single click.</li>
                                <li>Understand what inventory is empty and available for new equipment!</li>
                            </ul>
                        </div><?php #end col-lg-7 ?>

                        <div class="col-12 col-lg-5">
                            <div>
                                <img src="images/features/site-management/img_1.png" width="480" height="569" alt="<?php echo $siteObject->getFeaturesSiteManagementMenuArray()['ariaLabel'][1]; ?>" class="img-fluid image-button" />
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
        'href' => $siteObject->getFeaturesMenuArray()['href'][1],
        'text' => 'Case Study Report')); ?>
<?php include($siteTags.'main-end.php');?>
<?php include($siteTags.'footer.php');?>
<?php include($siteComponent.'modal.php');?>
</body>
</html>