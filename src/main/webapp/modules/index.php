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
    <title><?php echo $siteObject->getFeaturesPage()['ariaLabel'][0]; ?></title>
</head>
<?php
    $_SESSION['strMainMenu'] = $siteObject->getFeaturesPage()['ariaLabel'][0];
?>
<body>
<?php include($siteTags.'header.php');?>
<?php includeWithVariables($siteTags.'hero.php',
    array('h3' => $siteObject->getFeaturesPage()['ariaLabel'][0],
        'title' => 'Rack Track a cloud-based SaaS product',
        'heroClass' => 'hero-green',
        'paddingClass' => 'pt-5',
        'imgSrc' => '/images/hero/features.png',
        'heroContent' => $siteObject->getFeaturesPage()['introduction'][0])); ?>
<?php include($siteTags.'main-start.php');?>

<?php includeWithVariables($siteComponent.'feature-header.php',
    array('h1' => $siteObject->getFeaturesPage()['ariaLabel'][0],
        'paddingClass' => 'py-3',
        'p' => 'The comprehensive inventory management system for your physical services. Our global system allows for you to have a real-time view of your centralized data.')); ?>

<div class="page-layout px-5">
    <div class="features-home">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-0">
            <?php
                foreach($siteObject->getFeaturesMenuArray()['text'] as $k => $v) {
            ?>
            <div class="col">
                <a href="<?php echo $siteObject->getFeaturesMenuArray()['href'][$k]; ?>">
                    <div class="feature-card" id="<?php echo $siteObject->getFeaturesMenuArray()['menuId'][$k]; ?>">
                        <div class="feature-card-body">
                            <div class="svg-ico"><?php echo $siteObject->getFeaturesMenuArray()['svgIco'][$k]; ?></div>
                            <h2><?php echo $siteObject->getFeaturesMenuArray()['text'][$k]; ?></h2>
                            <p><?php echo $siteObject->getFeaturesMenuArray()['content'][$k]; ?></p>
                        </div><?php #end advertCard-body ?>

                        <div class="feature-card-footer">
                            <div class="read-more">Explore</div>
                        </div><?php #end card-footer ?>
                    </div><?php #end card ?>
                </a>
            </div><?php #end col ?>
            <?php  } ?>
        </div><?php #end row ?>
    </div><?php #end features-home ?>
</div><?php #end page-layout ?>
<?php includeWithVariables($siteComponent.'feature-footer-button.php',
    array('p' => "Need a Custom Feature?",
        'paddingClass' => 'py-3',
         'href' => $siteObject->getFeaturesMenuArray()['href'][5],
        'text' => 'Learn More Here!')); ?>
<?php include($siteTags.'main-end.php');?>
<?php include($siteTags.'footer.php');?>
</body>
</html>