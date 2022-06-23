<?php
    $siteObject = new RackTrackSite();

    $strMainMenu =  !empty($_SESSION['strMainMenu']) ? $_SESSION['strMainMenu'] : "";
    $strSubMenu =  !empty($_SESSION['strSubMenu']) ? $_SESSION['strSubMenu'] : "";
    $intID = 0; $intSubID =0; $strSubMenuClass = "";

    if ($strMainMenu === 'About Rack Track') $intID=1;
    if ($strMainMenu === 'Rack Track Features') $intID=2;
    if ($strMainMenu === 'Frequently Asked Questions') $intID=3;
    if ($strMainMenu === 'Contact Rack Track') $intID=4;
?>
<div class="nav-container">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4 col-lg-3 col-xl-3 col-xxl-2" id="rack-track">
                <a href="<?php echo $siteObject->getHomePage()['href'][0]; ?>" aria-label="<?php echo $siteObject->getHomePage()['ariaLabel'][0]; ?>">
                    <?php echo $siteObject->getHomePage()['svgIco'][0]; ?>
                    <span class="d-none">Rack Track</span>
                </a>
            </div><?php #end col ?>

            <div class="col-12 col-sm-1 col-lg-5 col-xl-6 col-xxl-7 navigationBar">
                <div class="menuToggle">
                    <input type="checkbox" id="menuAv" aria-label="responsive menu checkbox" />
                    <label class="burger" for="menuAv" aria-label="responsive menu label"><span></span><span></span><span></span></label>
                    <nav id="menu">
                        <ul class="div-row menu text-uppercase" aria-label="Rack Track Menu">
                            <li class="nav-item<?php echo ($intID === 1) ? " active" : ""?>"><a href="<?php echo $siteObject->getAboutPage()['href'][0]; ?>" aria-label="<?php echo $siteObject->getAboutPage()['ariaLabel'][0]; ?>"><?php echo $siteObject->getAboutPage()['text'][0]; ?></a></li>
                            <li class="has-sub-menu-feature nav-item<?php echo ($intID === 2) ? " active" : ""?>"><a href="javascript:" aria-label="<?php echo $siteObject->getFeaturesPage()['ariaLabel'][0].' Menu'; ?>"><?php echo $siteObject->getFeaturesPage()['text'][0]; ?></a>
                                <ul class="has-sub-menu" aria-label="submenu">
                                    <li>
                                        <a href="<?php echo $siteObject->getFeaturesPage()['href'][0]; ?>" aria-label="<?php echo $siteObject->getFeaturesPage()['ariaLabel'][0]; ?>" class="mb-n4">
                                            <div class="row gridContainer">
                                                <div class="col-2 gridItem menuIcons feature-ico"><?php echo $siteObject->getFeaturesPage()['svgIco'][0]; ?></div>
                                                <div class="col-10 gridItem menuText">
                                                    <h2><?php echo $siteObject->getFeaturesPage()['text'][0]; ?></h2>
                                                    <p><?php echo $siteObject->getFeaturesPage()['introduction'][0]; ?></p>
                                                </div>
                                            </div><?php #end gridContainer ?>
                                        </a>
                                    </li>
                                    <?php
                                        foreach($siteObject->getFeaturesMenuArray()['text'] as $k => $v)
                                            {
                                                if($strSubMenu === $siteObject->getFeaturesMenuArray()['text'][$k])
                                                    $strSubMenuClass = ' class="active"';
                                                else
                                                    $strSubMenuClass = '';
                                    ?>
                                    <li><a href="<?php echo $siteObject->getFeaturesMenuArray()['href'][$k]; ?>" aria-label="<?php echo $siteObject->getFeaturesMenuArray()['ariaLabel'][$k]; ?>"<?php echo $strSubMenuClass; ?>>
                                            <div class="row gridContainer">
                                                <div class="col-2 gridItem menuIcons">
                                                    <?php echo $siteObject->getFeaturesMenuArray()['svgIco'][$k]; ?>
                                                </div>
                                                <div class="col-10 gridItem menuText">
                                                    <?php echo $siteObject->getFeaturesMenuArray()['text'][$k]; ?>
                                                </div>
                                            </div><?php #end gridContainer ?>
                                        </a>
                                    </li>
                                    <?php  } ?>
                                </ul>
                            </li>
                            <li class="nav-item<?php echo ($intID === 3) ? " active" : ""?>"><a href="<?php echo $siteObject->getFaqPage()['href'][0]; ?>" aria-label="<?php echo $siteObject->getFaqPage()['ariaLabel'][0]; ?>"><?php echo $siteObject->getFaqPage()['text'][0]; ?></a></li>
                            <li class="nav-item<?php echo ($intID === 4) ? " active" : ""?>"><a href="<?php echo $siteObject->getContactPage()['href'][0]; ?>" aria-label="<?php echo $siteObject->getContactPage()['ariaLabel'][0]; ?>"><?php echo $siteObject->getContactPage()['text'][0]; ?></a></li>
                        </ul>
                    </nav>
                </div><?php #end menuToggle ?>
            </div><?php #end col ?>

            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 col-xxl-3 login-signup">
                <div class="d-flex justify-content-center justify-content-sm-end justify-content-lg-center justify-content-xl-end">
                    <a href="<?php echo $siteObject->getLogin(); ?>" class="btn btn-login me-1 me-sm-3"
                       role="button" title="Log In" target="_blank" aria-label="Rack Track Log in Page"><div class="d-inline-block px-2">Log In</div></a>
                    <a href="<?php echo $siteObject->getSignup(); ?>" class="btn btn-signup me-1 me-sm-3"
                       role="button" title="Sign Up" target="_blank" aria-label="Rack Track Sign Up Page"<div class="d-inline-block px-2">Sign Up</div></a>
                </div>
            </div><?php # end col ?>
        </div><?php #end row ?>
    </div><?php #end container ?>
</div><?php #end nav-container ?>