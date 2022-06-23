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
    <title><?php echo $siteObject->getFeaturesMenuArray()['ariaLabel'][1]; ?></title>
</head>
<?php
    $_SESSION['strMainMenu'] = $siteObject->getFeaturesPage()['ariaLabel'][0];
    $_SESSION['strSubMenu'] = $siteObject->getFeaturesMenuArray()['ariaLabel'][1];
?>
<body>
<?php include($siteTags.'header.php');?>
<?php includeWithVariables($siteTags.'hero.php',
    array('h3' => $siteObject->getFeaturesMenuArray()['ariaLabel'][1],
        'title' => 'Rack Track a cloud-based SaaS product',
        'heroClass' => 'hero-green',
        'paddingClass' => 'pt-5',
        'imgSrc' => '/images/hero/regional-mapping.png',
        'heroContent' => $siteObject->getFeaturesMenuArray()['content'][1])); ?>
<?php include($siteTags.'main-start.php');?>

<div class="tab-container">
<?php includeWithVariables($siteComponent.'feature-header.php',
    array('h1' => $siteObject->getFeaturesMenuArray()['ariaLabel'][1],
        'paddingClass' => 'pt-3',
        'submenuId' => 'getFeaturesRegionalMappingMenuArray')); ?>
<div class="page-layout">
    <div class="row row-cols-1 g-0">
        <div class="col">
            <div data-tabname="<?php echo $siteObject->getFeaturesRegionalMappingMenuArray()['tabName'][0]; ?>" class="tab-content">
                <aside aria-label="<?php echo $siteObject->getFeaturesRegionalMappingMenuArray()['ariaLabel'][0]; ?>">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <h2>Geo-Fencing</h2>
                            <p>Get real-time overview of your Data Centers across the globe.</p>
                            <ul>
                                <li>Custom Data Centers are displayed upon registration.</li>
                                <li>View inventory across the world with regional division.</li>
                                <li>Direct monitoring of enterprise deployments.</li>
                            </ul>
                        </div><?php #end col-lg-7 ?>

                        <div class="col-12 col-lg-5">
                            <div>
                                <img src="images/features/regional-mapping/img.png" width="1140" height="881" alt="<?php echo $siteObject->getFeaturesRegionalMappingMenuArray()['ariaLabel'][0]; ?>" class="img-fluid image-button" />
                            </div>
                        </div><?php #end col-lg-5 ?>
                    </div><?php #row ?>
                </aside>
            </div><?php #end data-content ?>
            <div data-tabname="<?php echo $siteObject->getFeaturesRegionalMappingMenuArray()['tabName'][1]; ?>" class="tab-content">
                <aside aria-label="<?php echo $siteObject->getFeaturesRegionalMappingMenuArray()['ariaLabel'][1]; ?>">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <h2>Real Time Overview</h2>
                            <p>Keep inventory in sight with our birds-eye view of deployed data centers.</p>
                            <ul>
                                <li>Get an Aerial view of your enterprise's sites!</li>
                                <li>Information on all of your sites in one list!</li>
                            </ul>
                        </div><?php #end col-lg-7 ?>

                        <div class="col-12 col-lg-5">
                            <div>
                                <img src="images/features/regional-mapping/img_1.png" width="1120" height="812" alt="<?php echo $siteObject->getFeaturesRegionalMappingMenuArray()['ariaLabel'][1]; ?>" class="img-fluid image-button" />
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