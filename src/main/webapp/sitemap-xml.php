<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sitemap</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
$time = explode(" ",microtime());
$time = $time[1];

// include class
include 'SitemapGenerator.php';
// create object
$sitemap = new SitemapGenerator("http://marketing2.rack-track.com/", "");

// will create also compressed (gzipped) sitemap
$sitemap->createGZipFile = true;

// determine how many urls should be put into one file
$sitemap->maxURLsPerSitemap = 10000;

// sitemap file name
$sitemap->sitemapFileName = "sitemap.xml";

// sitemap index file name
$sitemap->sitemapIndexFileName = "sitemap-index.xml";

// robots file name
$sitemap->robotsFileName = "robots.txt";

$urls = array(
    array("http://marketing2.rack-track.com/",                    date('c'),  'daily',    '1'),
    array("http://marketing2.rack-track.com/index.php",          date('c'),  'daily',    '0.5'),
    array("http://marketing2.rack-track.com/modules/index.php",          date('c'),  'daily',    '0.5'),
    array("http://marketing2.rack-track.com/modules/global-searching.php",          date('c'),  'daily',    '0.5'),
    array("http://marketing2.rack-track.com/modules/regional-mapping.php",          date('c'),  'daily',    '0.5'),
    array("http://marketing2.rack-track.com/modules/inventory-management.php",          date('c'),  'daily',    '0.5'),
    array("http://marketing2.rack-track.com/modules/site-management.php",          date('c'),  'daily',    '0.5'),
    array("http://marketing2.rack-track.com/modules/dashboard.php",          date('c'),  'daily',    '0.5'),
    array("http://marketing2.rack-track.com/modules/custom-features.php",          date('c'),  'daily',    '0.5'),
    array("http://marketing2.rack-track.com/faq.php",          date('c'),  'daily'),
    array("http://marketing2.rack-track.com/contact.php",          date('c')),
    array("http://marketing2.rack-track.com/terms-and-conditions.php",date('c')),
    array("http://marketing2.rack-track.com/privacy-policy.php", date('c')),
    array("http://marketing2.rack-track.com/GDPR.php", date('c')),
    array("http://marketing2.rack-track.com/sitemap.php", date('c'))
    );

// add many URLs at one time
$sitemap->addUrls($urls);

try {
    // create sitemap
    $sitemap->createSitemap();

    // write sitemap as file
    $sitemap->writeSitemap();

    // update robots.txt file
    $sitemap->updateRobots();

    // submit sitemaps to search engines
    $result = $sitemap->submitSitemap("yahooAppId");
    // shows each search engine submitting status
    echo "<pre>";
    print_r($result);
    echo "</pre>";

}
catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

echo "Memory peak usage: ".number_format(memory_get_peak_usage()/(1024*1024),2)."MB";
$time2 = explode(" ",microtime());
$time2 = $time2[1];
echo "<br>Execution time: ".number_format($time2-$time)."s";
?>
</body>
</html>
