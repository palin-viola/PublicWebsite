<?php
include "php/gzip.php";
include "rack-track-site.php";
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
    <title><?php echo $siteObject->getFaqPage()['ariaLabel'][0]; ?></title>
</head>
<?php
$_SESSION['strMainMenu'] = $siteObject->getFaqPage()['ariaLabel'][0];
?>
<body>
<?php include($siteTags.'header.php');?>
<?php includeWithVariables($siteTags.'hero.php',
    array('h3' => $siteObject->getFaqPage()['ariaLabel'][0],
        'title' => 'Rack Track a cloud-based SaaS product',
        'heroClass' => 'hero-navy',
        'paddingClass' => 'pt-3 pt-sm-5',
        'imgSrc' => '/images/hero/faq.png',
        'heroContent' => "Looking for inventory Management System to real time reports on deployed devices? But you have questions? <br><br>No problem, here's some common questions that clients ask us.")); ?>
<?php include($siteTags.'main-start.php');?>
<?php includeWithVariables($siteTitle.'page-title.php', array('h1' => $siteObject->getFaqPage()['ariaLabel'][0])); ?>
<div class="page-layout py-5 mb-5">
    <div class="row row-cols-1 g-4">
        <div class="col">
            <div class="vc_toggle">
                <ul role="tablist">
                    <li tabindex="-1">
                        <h3>What is Rack Track?</h3>
                        <div>
                            <p>Rack Track is an Inventory Management system that enables the ability to get real time reports on any deployed device, anywhere.</p>
                        </div><?php #end div ?>
                    </li>
                    <li>
                       <h3>How do do I use Rack Track?</h3>
                        <div>
                            <p>Simple - give us a call at <a href="tel:<?php echo $siteObject->getCompanySalesTel3(); ?>"><?php echo $siteObject->getCompanySalesTel3(); ?></a></p>
                        </div>
                    </li>
                    <li>
                        <h3>What are the add-on modules?</h3>
                        <div>
                            <p>With a modular design, Rack Track allows for the user to customize usability to their needs with the ability to choose between different features that are supported as modules.</p>
                        </div>
                    </li>
                    <li>
                        <h3>Why are licenses based on features?</h3>
                        <div>
                            <p>We believe in an à la carte pricing model, so you don't need to purchase features which you won't use.</p>
                        </div>
                    </li>
                    <li>
                        <h3>How does support work?</h3>
                        <div>
                            <p>We will help you with installation, licensing, and usage while your team gets familiar with Rack Track. If anything else comes up, just give us a call.</p>
                        </div>
                    </li>
                    <li>
                        <h3>Do you offer custom features?</h3>
                        <div>
                            <p>Absolutely! Rack Track's modular design coupled with our team's extensive experience in software development allow us to create effective custom applications to suit your needs. Just give us a call.<br/><br/>
                                <a href="<?php echo $siteObject->getFeaturesMenuArray()['href'][5]; ?>" class="btn btn-primary px-5" role="button">Learn More About Custom Features</a></p>
                        </div>
                    </li>
                    <li>
                        <h3>What is the product's purpose?</h3>
                        <div>
                            <p>The product provides for real time physical and virtual inventory of telecommunications devices, IT infrastructure/facility infrastructure and similar.</p>
                        </div>
                    </li>
                    <li>
                        <h3>What is the product's target audience?</h3>
                        <div>
                            <p>Initially, the focus is likely to be on the telecom/media/cable markets but the product would be geared towards any midsize entity that lacks this type of control/knowledge of it's assets.</p>
                        </div>
                    </li>
                    <li>
                        <h3>What type of service is this?</h3>
                        <div>
                            <p>The product is a cloud-based SaaS product.</p>
                        </div>
                    </li>
                    <li>
                        <h3>How does the product interact with other software platforms (i.e., NMS, billing/invoice, orchestration/provisioning)</h3>
                        <div>
                            <p>The product will support robust API integration and serve to supplement existing platforms that serve specific business needs.</p>
                        </div>
                    </li>
                    <li>
                        <h3>What makes the product special?</h3>
                        <div>
                            <ul>
                                <li>The product seamlessly integrates project management activities related to integration and deployment of the inventoried assets.  Project workflow allows for association with any/all inventoried devices, assigning physical and virtual devices as parts of integrated projects and activities. i.e., upgrade 25 routers as a project, the product allows for the creation of the project template, Gantt chart, resources and tasks assignments based on the devices in question.</li>
                                <li>The product creates the association between the physical identity, awareness, inventory, state/health  etc., of the multitude of telecommunications devices that exist in a customer's data centers, communications closets, remote sites, facilities etc.  If I have thousands of routers, switches and servers spread across multiple cities, locations etc., how do I seamlessly keep track of replacing, repairing, moving etc.</li>
                                <li>The product allows for intelligent discovery of devices, configurations of network devices, and inventories.</li>
                                <li>The product supports geolocation/GPS location of devices, device types etc., which allows for instance someone to "find" where a certain network device exists across the inventory - "found - 1 "xyz" router in Bangalore, 2 "xyz" routers in Pune" etc., which then allows for service/device recovery, sparing etc.</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <h3>Why Rack Track?</h3>
                        <div>
                            <p>The original thought was you have lots of telecom/equipment racks and you need to track everything in them.  The original cable/MSO model is such that you have thousands of facilities spread throughout the country and too often nobody really knew how many or "where" these things are currently residing...perhaps plugged in somewhere, perhaps on a shelf  in a closet etc..</p>
                        </div>
                    </li>
                </ul>
            </div><?php #end vc_toggle ?>
        </div><?php #end col ?>
    </div><?php #end row ?>
</div><?php #end page-layout ?>
<?php include($siteAdvert.'advert-home.php');?>
<?php include($siteTags.'main-end.php');?>
<?php include($siteTags.'footer.php');?>
</body>
</html>