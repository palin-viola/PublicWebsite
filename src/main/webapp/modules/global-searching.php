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
    <title><?php echo $siteObject->getFeaturesMenuArray()['ariaLabel'][0]; ?></title>
</head>
<?php
    $_SESSION['strMainMenu'] = $siteObject->getFeaturesPage()['ariaLabel'][0];
    $_SESSION['strSubMenu'] = $siteObject->getFeaturesMenuArray()['ariaLabel'][0];
?>
<body>
<?php include($siteTags.'header.php');?>
<?php includeWithVariables($siteTags.'hero.php',
    array('h3' => $siteObject->getFeaturesMenuArray()['ariaLabel'][0],
        'title' => 'Rack Track a cloud-based SaaS product',
        'heroClass' => 'hero-green',
        'paddingClass' => 'pt-5',
        'imgSrc' => '/images/hero/global-search.png',
        'heroContent' => $siteObject->getFeaturesMenuArray()['content'][0])); ?>
<?php include($siteTags.'main-start.php');?>
<div class="tab-container">
<?php includeWithVariables($siteComponent.'feature-header.php',
    array('h1' => $siteObject->getFeaturesMenuArray()['ariaLabel'][0],
        'paddingClass' => 'pt-3',
        'submenuId' => 'getFeaturesGlobalSearchMenuArray')); ?>
<div class="page-layout">
    <div class="row row-cols-1 g-0">
        <div class="col">
            <div data-tabname="<?php echo $siteObject->getFeaturesGlobalSearchMenuArray()['tabName'][0]; ?>" class="tab-content">
                <aside aria-label="<?php echo $siteObject->getFeaturesGlobalSearchMenuArray()['ariaLabel'][0]; ?>">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <h2>Search</h2>
                            <p>With smart matching, partial criteria is all that's required for searching.</p>
                            <ul>
                                <li>Partial Information from a MAC Address, IP Address, or Device Name will result in all relative data.</li>
                                <li>Highlighted material will be displayed from what was provided.</li>
                            </ul>
                        </div><?php #end col-lg-7 ?>

                        <div class="col-12 col-lg-5">
                           <img src="images/features/global-searching/img.png" width="1162" height="707" alt="<?php echo $siteObject->getFeaturesGlobalSearchMenuArray()['ariaLabel'][0]; ?>" class="img-fluid image-button" />
                        </div><?php #end col-lg-5 ?>
                    </div><?php #row ?>
                </aside>
            </div><?php #end data-content ?>
            <div data-tabname="<?php echo $siteObject->getFeaturesGlobalSearchMenuArray()['tabName'][1]; ?>" class="tab-content">
                <aside aria-label="<?php echo $siteObject->getFeaturesGlobalSearchMenuArray()['ariaLabel'][1]; ?>">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <h2>Quick Access</h2>
                            <p>Get direct access to the devices rack and view other inventory available!</p>
                            <ul>
                                <li>Quick statistics are available from the search results.</li>
                                <li>Pull up the devices rack to view all other devices related to your initial search.</li>
                            </ul>
                        </div><?php #end col-lg-7 ?>

                        <div class="col-12 col-lg-5">
                            <img src="images/features/global-searching/img_1.png" width="1029" height="981" alt="<?php echo $siteObject->getFeaturesGlobalSearchMenuArray()['ariaLabel'][1]; ?>" class="img-fluid image-button" />
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
        'href' => $siteObject->getFeaturesMenuArray()['href'][0],
        'text' => 'Case Study Report')); ?>
<?php include($siteTags.'main-end.php');?>
<?php include($siteTags.'footer.php');?>
<?php include($siteComponent.'modal.php');?>
</body>
</html>