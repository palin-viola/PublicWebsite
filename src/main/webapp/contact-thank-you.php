<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    include("php/gzip.php");
    include("rack-track-site.php");
    include("php/alphaID.php");
    $siteTags = "tags/site-tags/";
    $siteTitle = "tags/site-title/";
    $siteAdvert = "tags/site-advert/";
    $siteComponent = "tags/site-components/";
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
    <title><?php echo $siteObject->getContactPage()['ariaLabel'][0]; ?></title>
</head>
<?php
    $_SESSION['strMainMenu'] = $siteObject->getContactPage()['ariaLabel'][0];
?>
<body>
    <?php include($siteTags.'header.php');?>
    <?php includeWithVariables($siteTags.'hero.php',
        array('h3' => 'Contact Us',
        'title' => 'Rack Track a cloud-based SaaS product',
        'heroClass' => 'hero-darkBlue',
        'paddingClass' => 'pt-5',
        'imgSrc' => '/images/hero/contact.png',
        'heroContent' => $siteObject->getContactPage()['introduction'][0])); ?>
    <?php include($siteTags.'main-start.php');?>
    <div class="page-layout py-5 mt-5 contact-page">
        <div class="row row-cols-1 g-0">
            <div class="col">
                <h1 class="text-center">Thank you for contacting Rack Track</h1>
                <div class="row row-cols-1 pt-4">
                    <div class="col">
                        <?php
                        $number_in = str_shuffle(strtotime('today')*1000+rand(10000,99999));
                        $referenceNumber = alphaID($number_in, false, 8);

                        $editFormAction = $_SERVER['PHP_SELF'];
                        if (isset($_SERVER['QUERY_STRING'])) {
                            $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
                        }

                        if(empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['email']) || empty($_POST['phone'])){
                            $pageGoTo = "contact.php?empty=true";
                        } else {
                            $contact_name = $_POST['firstName']." ".$_POST['lastName'];
                            $contact_email = $_POST['email'];
                            $contact_phone = $_POST['phone'];
                            $contact_message = $_POST['message'];

                            $to = "palin.viola@rack-track.com";
                            $subject = "Web Contact Form from " . $contact_name." with Reference ID: ".$referenceNumber;
                            $headers = 'From: support@rack-track.com' . "\r\n" .
                                'Reply-To: support@rack-track.com' . "\r\n" .
                                'X-Mailer: PHP/' . phpversion();

                            $MailBody = "";

                            //set a title for the message
                            $MailBody = $MailBody . "Customer Contact Details: ";
                            $MailBody = $MailBody . "\r\n";
                            $MailBody = $MailBody . "Name: ";
                            $MailBody = $MailBody .  $contact_name;
                            $MailBody = $MailBody . "\r\n";

                            $MailBody = $MailBody . "Email: ";
                            $MailBody = $MailBody . $contact_email;
                            $MailBody = $MailBody . "\r\n";

                            $MailBody = $MailBody . "Phone: ";
                            $MailBody = $MailBody .  $contact_phone;

                            $MailBody = $MailBody . "\r\n";
                            $MailBody = $MailBody . "Message: ";
                            $MailBody = $MailBody . $contact_message;
                            $MailBody = $MailBody . "\r\n\n";
                            $MailBody = $MailBody . "Regards,\r\n";
                            $MailBody = $MailBody . $contact_name."\r\n";
                            if(mail($to, $subject, $MailBody, $headers)) {
                        ?>
                        <div class="submit-success">
                            <h6>Application Complete</h6>
                            <p>Your reference number <br /><span class="font-weight-bold-type"><?php echo $referenceNumber; ?></span></p>
                        </div><?php #eend submit-success?>
                        <div class="col text-center pt-4">
                            <h3>What happens next</h3>
                            <p class="text-center">Rack Track will contact you as soon as possible to discuss your enquiry.</p>
                        </div><?php #eend col-12?>
                        <?php
                                } else {
                        ?>
                        <div class="submit-failure">
                            <h6>Message Send Failure</h6>
                            <p>Something went wrong</p>
                            <p>Cant send Email - Property mail.smtp.host not set</p>
                        </div><?php #end submit-success?>
                       <?php
                                }
                            }
                        ?>
                    </div><?php #end col-12?>
                </div><?php #eend row?>
            </div><?php #eend col-12 ?>
        </div><?php #end row ?>
    </div><?php #end page-layout ?>
    <?php includeWithVariables($siteComponent.'feature-footer-button.php',
        array('p' => "Find out how Rack Track can help your business",
            'paddingClass' => 'py-3',
            'columnClass' => 'four',
            'href' => 'mailto:'.$siteObject->getCompanySupportEmail(),
            'text' => 'Contact Sales')); ?>
    <?php include($siteTags.'main-end.php');?>
    <?php include($siteTags.'footer.php');?>
</body>
</html>