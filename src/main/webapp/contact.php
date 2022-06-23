<?php
    include "php/gzip.php";
    include "rack-track-site.php";
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
    <div class="page-layout mt-5 contact-page">
        <div class="row g-0">
            <div class="col-12 col-lg-6 contact-information p-5">
                <div class="info-div">
                    <h2>Office Locations</h2>
                    <h3>Florida</h3>
                    <p><?php echo $siteObject->getCompanyAddress(); ?></p>
                    <a href="https://goo.gl/maps/drL57cYPXXuwBDhP8" target="_blank" class="gMap">Open in Maps</a>
                </div><?php #end info-div ?>

                <div class="info-div">
                    <h3>Phone Numbers</h3>
                    <div class="row">
                        <div class="svg-col"><?php echo $siteObject->getSvgIconsArray()['contactTelIco'][0]; ?></div>
                        <div class="text-col">
                            <a href="tel:<?php echo $siteObject->getCompanySalesTel(); ?>" aria-label="Contact phone"><?php echo $siteObject->getCompanySalesTel(); ?></a><br />
                            <a href="tel:<?php echo $siteObject->getCompanySalesTel2(); ?>" aria-label="Contact phone support"><?php echo $siteObject->getCompanySalesTel2(); ?></a>
                        </div>
                    </div><?php #end row ?>

                    <div class="row pt-3">
                        <div class="svg-col"><?php echo $siteObject->getSvgIconsArray()['salesTelIco'][0]; ?></div>
                        <div class="text-col">
                            <h4>Sales</h4>
                            <a href="tel:<?php echo $siteObject->getCompanySupportTel(); ?>" aria-label="Corporate Email"><?php echo $siteObject->getCompanySupportTel(); ?></a><br />
                            <a href="tel:<?php echo $siteObject->getCompanyTel(); ?>" aria-label="Support Email"><?php echo $siteObject->getCompanyTel(); ?></a>
                        </div>
                    </div><?php #end row ?>
                </div><?php #end info-div ?>

                <div class="info-div">
                    <h3>Say Hello</h3>
                    <div class="row">
                        <div class="svg-col"><?php echo $siteObject->getSvgIconsArray()['emailIco'][0]; ?></div>
                        <div class="text-col">
                            <a href="mailto:<?php echo $siteObject->getCompanyEmail(); ?>"><?php echo $siteObject->getCompanyEmail(); ?></a><br />
                            <a href="mailto:<?php echo $siteObject->getCompanySupportEmail(); ?>"><?php echo $siteObject->getCompanySupportEmail(); ?></a>
                        </div>
                    </div><?php #end row ?>
                </div><?php #end info-div ?>
            </div><?php #end col ?>
            <div class="col-12 col-lg-6 contact-form">
                <div class="row">
                    <div class="col-12"><h1>Get in Touch</h1></div>
                    <div class="col-12">
                        <p>For general inquires, fill out the form to get in touch.</p>
                        <form id="form" method="post" action="contact-thank-you.php" class="needs-validation">
                            <div class="row g-0">
                                <div class="col-12 mt-3">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control is-valid1 first-name" id="firstName" name="firstName" autocomplete="off"  pattern='[a-zA-Z ]{3,}$' required placeholder="First Name" />
                                </div><?php #end col ?>

                                <div class="col-12 mt-3">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control is-valid1 last-name" id="lastName" name="lastName" autocomplete="off"  pattern='[a-zA-Z ]{3,}$' required placeholder="Last Name" />
                                </div><?php #end col ?>

                                <div class="col-12 mt-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control is-valid1 email" id="email" name="email"  autocomplete="off"  pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}' required placeholder="Email" />
                                </div><?php #end col ?>

                                <div class="col-12 mt-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control is-valid1 phone" id="phone" name="phone" autocomplete="off"  size='15' maxlength='15' required placeholder="Phone Number" />
                                </div><?php #end col ?>

                                <div class="col-12 mt-3">
                                    <label for="message" class="form-label">Comments, Questions or Requests...</label>
                                    <textarea name="message" id="message" placeholder="Comments, Questions or Requests..."  class="form-control comment" rows="3"></textarea>
                                </div><?php #end col ?>

                                <div class="col-12 mt-3">
                                    <p>By submitting this form I accept the <a href="<?php echo $siteObject->getTermsMenuArray()['href'][1]; ?>" aria-label="<?php echo $siteObject->getTermsMenuArray()['ariaLabel'][1]; ?>">privacy policy</a> of this site.</p>
                                </div>

                                <div class="col-12"><button class="btn btn-primary submit-btn" type="submit" name="send">Send us your inquiry</button></div>
                            </div><?php #end row ?>
                        </form>
                    </div><?php #end col ?>
                </div><?php #end row ?>
            </div><?php #end col .contact-form ?>
        </div><?php #end row ?>
        <div class="row row-cols-1">
            <div class="col mt-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3513.5729008818407!2d-82.7036455!3d28.2809647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c29070160264b1%3A0x8ae5b581120ad8e1!2s6709%20Ridge%20Rd%2C%20Port%20Richey%2C%20FL%2034668%2C%20USA!5e0!3m2!1sen!2sin!4v1654167939740!5m2!1sen!2sin" title="Rack Track Corporate Address" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><?php #end col ?>
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