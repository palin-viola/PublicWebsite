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
    <title><?php echo $siteObject->getFeaturesMenuArray()['ariaLabel'][4]; ?></title>
</head>
<?php
    $_SESSION['strMainMenu'] = $siteObject->getFeaturesPage()['ariaLabel'][0];
    $_SESSION['strSubMenu'] = $siteObject->getFeaturesMenuArray()['ariaLabel'][4];
?>
<body>
<?php include($siteTags.'header.php');?>
<?php includeWithVariables($siteTags.'hero.php',
    array('h3' => $siteObject->getFeaturesMenuArray()['ariaLabel'][4],
        'title' => 'Rack Track a cloud-based SaaS product',
        'heroClass' => 'hero-green',
        'paddingClass' => 'pt-5',
        'imgSrc' => '/images/hero/dashboard.png',
        'heroContent' => $siteObject->getFeaturesMenuArray()['content'][4])); ?>
<?php include($siteTags.'main-start.php');?>

<div class="tab-container">
<?php includeWithVariables($siteComponent.'feature-header.php',
    array('h1' => $siteObject->getFeaturesMenuArray()['ariaLabel'][4],
        'paddingClass' => 'pt-3',
        'submenuId' => 'getFeaturesDashboardMenuArray')); ?>
<div class="page-layout">
    <div class="row row-cols-1 g-0">
        <div class="col">
            <div data-tabname="<?php echo $siteObject->getFeaturesDashboardMenuArray()['tabName'][0]; ?>" class="tab-content">
                <aside aria-label="<?php echo $siteObject->getFeaturesDashboardMenuArray()['ariaLabel'][0]; ?>">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <h2>Reporting</h2>
                            <p>Stay up to date with what is happening on deployed inventory with our real-time reports!</p>
                            <ul>
                                <li>Understand who are the top vendors for management.</li>
                                <li>See which devices are most commonly deployed from your inventory.</li>
                                <li>Make out where most of your resources are provisioned.</li>
                                <li>Recognize how many devices are on standby for sparing.</li>
                            </ul>
                        </div><?php #end col-lg-7 ?>

                        <div class="col-12 col-lg-5 img text-center">
                            <div>
                                <img src="images/features/dashboard/img.png" width="927" height="768" alt="<?php echo $siteObject->getFeaturesDashboardMenuArray()['ariaLabel'][0]; ?>" class="img-fluid image-button" />
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