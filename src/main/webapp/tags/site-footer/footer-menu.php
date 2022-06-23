<?php
$siteObject = new RackTrackSite();
?>
<div class="footer-menu pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 col-xxl-3">
                <h2>Corporate Address</h2>
                <div class="row">
                    <div class="col-2 col-sm-1"><div class="rack-track-ico"><?php echo $siteObject->getSvgIconsArray()['rackTrackIco'][0]; ?></div><span class="d-none">Rack Track</span></div>
                    <div class="col-10 col-sm-11">
                        <p class="px-md-3">
                            <span class="p6-s"><?php echo $siteObject->getCompanyAddressLine1(); ?><br /></span>
                            <span class="p6-s"><?php echo $siteObject->getCompanyAddressLine2(); ?><br /></span>
                            <a href="mailto:<?php echo $siteObject->getCompanyEmail(); ?>"><?php echo $siteObject->getCompanyEmail(); ?></a><br />
                            <a href="tel:<?php echo $siteObject->getCompanyTel(); ?>"><?php echo $siteObject->getCompanyTel(); ?></a>
                        </p>
                    </div>
                </div>
            </div><?php #end col?>

            <div class="col-12 col-md-6 col-lg-4 col-xxl-3 pt-4 pt-md-0">
                <h2>Have any Questions?</h2>
                <div class="call-btn py-2 p6-s"><a class="btn btn-primary" href="tel:<?php echo $siteObject->getCompanySalesTel(); ?>" role="button"><div class="tel-ico"><?php echo $siteObject->getSvgIconsArray()['telIco'][0]; ?></div>
                <div class="ps-1">Call Us</div></a></div>
                <p>
                    <a href="tel:<?php echo $siteObject->getCompanySalesTel(); ?>"><?php echo $siteObject->getCompanySalesTel(); ?></a><br />
                    <a href="tel:<?php echo $siteObject->getCompanySalesTel2(); ?>"><?php echo $siteObject->getCompanySalesTel2(); ?></a>
                </p>
                <h2>Sales/Support</h2>
                <a href="mailto:<?php echo $siteObject->getCompanySupportEmail(); ?>"><?php echo $siteObject->getCompanySupportEmail(); ?></a><br />
                <a href="tel:<?php echo $siteObject->getCompanySupportTel(); ?>" aria-label="Rack Track Toll free number"><?php echo $siteObject->getCompanySupportTel(); ?> (Toll Free)</a>
            </div><?php #end col?>

            <div class="col-12 col-md-6 col-lg-4 col-xxl-2 pt-4 pt-lg-0 d-none d-md-inline-block">
                <h2>Company</h2>
                <ul>
                    <li><a href="<?php echo $siteObject->getAboutPage()['href'][0]; ?>" aria-label="<?php echo $siteObject->getAboutPage()['ariaLabel'][0]; ?>"><?php echo $siteObject->getAboutPage()['text'][0]; ?></a></li>
                    <li><a href="<?php echo $siteObject->getFeaturesPage()['href'][0]; ?>" aria-label="<?php echo $siteObject->getFeaturesPage()['ariaLabel'][0]; ?>"><?php echo $siteObject->getFeaturesPage()['text'][0]; ?></a></li>
                </ul>
            </div><?php #end col?>

            <div class="col-12 col-md-6 col-lg-4 col-xxl-2 pt-4 pt-xxl-0 d-none d-md-inline-block">
                <h2>Staple Features</h2>
                <ul>
                <?php
                        foreach($siteObject->getFeaturesMenuArray()['text'] as $k => $v) {
                ?>
                        <li><a href="<?php echo $siteObject->getFeaturesMenuArray()['href'][$k]; ?>" aria-label="<?php echo $siteObject->getFeaturesMenuArray()['ariaLabel'][$k]; ?>"><?php echo $siteObject->getFeaturesMenuArray()['text'][$k]; ?></a></li>
                 <?php  } ?>
                </ul>
            </div><?php #end col?>

            <div class="col-12 col-md-6 col-lg-4 col-xxl-2 pt-4 pt-xxl-0 d-none d-md-inline-block">
                <h2>Contact</h2>
                <ul>
                    <li><a href="<?php echo $siteObject->getFaqPage()['href'][0]; ?>" aria-label="<?php echo $siteObject->getFaqPage()['ariaLabel'][0]; ?>"><?php echo $siteObject->getFaqPage()['text'][0]; ?></a></li>
                    <li><a href="<?php echo $siteObject->getContactPage()['href'][0]; ?>" aria-label="<?php echo $siteObject->getContactPage()['ariaLabel'][0]; ?>"><?php echo $siteObject->getContactPage()['text'][0]; ?></a></li>
                </ul>
            </div><?php #end col?>
        </div><?php #end row?>
    </div><?php #end container?>
</div><?php #end footer-menu?>