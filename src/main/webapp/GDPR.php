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
    <title><?php echo $siteObject->getTermsMenuArray()['ariaLabel'][2]; ?></title>
</head>
<?php
    $_SESSION['strMainMenu'] = 'General Data Protection Regulation (GDPR)';
?>
<body>
    <?php include($siteTags.'header.php');?>
    <?php include($siteTags.'main-start.php');?>
    <?php includeWithVariables($siteTitle.'page-title.php', array('h1' => 'General Data Protection Regulation (GDPR)', 'h2' => 'for Rack Track, LLC')); ?>
    <div class="page-layout py-5">
        <div class="row row-cols-1 g-4">
            <div class="col px-5">
        <!--<p>At Rack Track, accessible from http://ecautopilot.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Rack Track and how we use it.</p>-->

        <!--<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us. Our Privacy Policy was generated with the help of <a href="https://www.gdprprivacynotice.com/">GDPR Privacy Policy Generator from GDPRPrivacyNotice.com</a></p>-->

        <p>We are a Data Controller of your information.</p>

        <p>Rack Track, LLC legal basis for collecting and using the personal information described in this Privacy Policy depends on the Personal Information we collect and the specific context in which we collect the information:</p>
        <ul>
            <li>Rack Track, LLC needs to perform a contract with you</li>
            <li>You have given Rack Track, LLC permission to do so</li>
            <li>Processing your personal information is in Rack Track, LLC legitimate interests</li>
            <li>Rack Track, LLC needs to comply with the law</li>
        </ul>

        <p>Rack Track, LLC will retain your personal information only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use your information to the extent necessary to comply with our legal obligations, resolve disputes, and enforce our policies.</p>

        <p>If you are a resident of the European Economic Area (EEA), you have certain data protection rights. If you wish to be informed what Personal Information we hold about you and if you want it to be removed from our systems, please contact us.</p>
        <p>In certain circumstances, you have the following data protection rights:</p>
        <ul>
            <li>The right to access, update or to delete the information we have on you.</li>
            <li>The right of rectification.</li>
            <li>The right to object.</li>
            <li>The right of restriction.</li>
            <li>The right to data portability.</li>
            <li>The right to withdraw consent.</li>
        </ul>

        <h2>Log Files</h2>

        <p>Rack Track follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>

        <h2>Cookies and Web Beacons</h2>

        <p>Like any other website, Rack Track uses 'cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>

        <p>For more general information on cookies, please read <a href="https://www.cookieconsent.com/what-are-cookies/" target="_blank">"What Are Cookies"</a></p>

        <h2>Privacy Policies</h2>

        <P>You may consult this list to find the Privacy Policy for each of the advertising partners of Rack Track.</p>

        <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Rack Track, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>

        <p>Note that Rack Track has no access to or control over these cookies that are used by third-party advertisers.</p>

        <h2>Third Party Privacy Policies</h2>

        <p>Rack Track's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>

        <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>

        <h2>Children's Information</h2>

        <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

        <p>Rack Track does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>

        <h2>Online Privacy Policy Only</h2>

        <p>Our Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Rack Track. This policy is not applicable to any information collected offline or via channels other than this website.</p>

        <h2>Consent</h2>

        <p>By using our website, you hereby consent to our <a href="<?php echo $siteObject->getTermsMenuArray()['href'][1]; ?>" aria-label="<?php echo $siteObject->getTermsMenuArray()['ariaLabel'][1]; ?>">Privacy Policy</a> and agree to its <a href="<?php echo $siteObject->getTermsMenuArray()['href'][0]; ?>" aria-label="<?php echo $siteObject->getTermsMenuArray()['ariaLabel'][0]; ?>">terms.</a></p>
            </div><?php #end col ?>
        </div><?php #end row ?>
    </div><?php #end page-layout ?>
    <?php include($siteTags.'main-end.php');?>
    <?php include($siteTags.'footer.php');?>
</body>
</html>