<?php
    $siteObject = new RackTrackSite();
?>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 py-1 py-lg-0">
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <ul>
                        <?php
                            foreach($siteObject->getTermsMenuArray()['text'] as $k => $v) {
                        ?>
                            <li><a href="<?php echo $siteObject->getTermsMenuArray()['href'][$k]; ?>" aria-label="<?php echo $siteObject->getTermsMenuArray()['ariaLabel'][$k]; ?>"><?php echo $siteObject->getTermsMenuArray()['text'][$k]; ?></a></li>
                        <?php  } ?>
                    </ul>
                </div><?php #end d-flex ?>
            </div><?php #end col ?>
            <div class="col-12 col-lg-6 py-1 py-lg-0">
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <ul class="social">
                        <li><a href="<?php echo $siteObject->getFacebook(); ?>" target="_blank" aria-label="<?php echo $siteObject->getSvgIconsArray()['facebookIco'][1]; ?>"><?php echo $siteObject->getSvgIconsArray()['facebookIco'][0]; ?><span class="d-none"><?php echo $siteObject->getSvgIconsArray()['facebookIco'][2]; ?></span></a></li>
                        <li><a href="<?php echo $siteObject->getTwitter(); ?>" target="_blank" aria-label="<?php echo $siteObject->getSvgIconsArray()['twitterIco'][1]; ?>"><?php echo $siteObject->getSvgIconsArray()['twitterIco'][0]; ?><span class="d-none"><?php echo $siteObject->getSvgIconsArray()['twitterIco'][2]; ?></span></a></li>
                    </ul>
                    <div class="copyright">&copy; Copyright <?php call_user_func(function($y){$c=date('Y');echo $y.(($y!=$c)?'-'.$c:'');}, $siteObject->getCopyrightYearStart()); ?> <?php echo $siteObject->getCompanyName(); ?></div>
                </div><?php #end d-flex ?>
            </div><?php #end col ?>
        </div><?php #end row ?>
    </div><?php #end container ?>
    <a href="javascript:" class="scrollUp"><span class="scroll"></span></a>
</div><?php #end footer ?>