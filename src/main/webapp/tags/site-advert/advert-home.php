<?php
$siteObject = new RackTrackSite();
?>

<?php
    $strMainMenu =  !empty($_SESSION['strMainMenu']) ? $_SESSION['strMainMenu'] : "";
    if ($strMainMenu !== 'About Rack Track') {
?>
<div class="row row-cols-1 g-4">
    <div class="col">
        <h4>Staple Features</h4>
    </div><?php #end col ?>
</div><?php #end row ?>
<?php } ?>
<div class="advert-home">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5 g-4">
        <div class="col">
            <a href="<?php echo $siteObject->getFeaturesMenuArray()['href'][4]; ?>">
                <div class="advert-card" id="<?php echo $siteObject->getFeaturesMenuArray()['menuId'][4]; ?>">
                    <div class="advertCard-body">
                        <?php echo $siteObject->getFeaturesMenuArray()['svgIco'][4]; ?>
                        <h2>Dashboard</h2>
                        <p>Enhanced statistics on deployed devices, availability, site density, and top vendors.</p>
                    </div><?php #end advertCard-body ?>

                    <div class="advertCard-footer">
                        <div class="read-more">Reporting</div>
                    </div><?php #end card-footer ?>
                </div><?php #end card ?>
            </a>
        </div><?php #end col ?>

        <div class="col">
            <a href="<?php echo $siteObject->getFeaturesMenuArray()['href'][1]; ?>">
                <div class="advert-card" id="<?php echo $siteObject->getFeaturesMenuArray()['menuId'][1]; ?>">
                    <div class="advertCard-body">
                        <?php echo $siteObject->getFeaturesMenuArray()['svgIco'][1]; ?>
                        <h2>Custom Regions</h2>
                        <p>Display resources within custom defined Regions displayed with geofencing.</p>
                    </div><?php #end advertCard-body ?>

                    <div class="advertCard-footer">
                        <div class="read-more">Regional Mapping</div>
                    </div><?php #end card-footer ?>
                </div><?php #end card ?>
            </a>
        </div><?php #end col ?>

        <div class="col">
            <a href="<?php echo $siteObject->getFeaturesMenuArray()['href'][3]; ?>">
                <div class="advert-card" id="<?php echo $siteObject->getFeaturesMenuArray()['menuId'][3]; ?>">
                    <div class="advertCard-body">
                        <?php echo $siteObject->getFeaturesMenuArray()['svgIco'][3]; ?>
                        <h2>Site Management</h2>
                        <p>Keep track of what is happening across all of your devices with our custom site deployments.</p>
                    </div><?php #end advertCard-body ?>

                    <div class="advertCard-footer">
                        <div class="read-more">Custom Regions</div>
                    </div><?php #end advertCard-footer ?>
                </div><?php #end card ?>
            </a>
        </div><?php #end col ?>

        <div class="col">
            <a href="<?php echo $siteObject->getFeaturesMenuArray()['href'][0]; ?>">
                <div class="advert-card" id="<?php echo $siteObject->getFeaturesMenuArray()['menuId'][0]; ?>">
                    <div class="advertCard-body">
                        <?php echo $siteObject->getFeaturesMenuArray()['svgIco'][0]; ?>
                        <h2>Global Device Search</h2>
                        <p>Locate any device within your inventory with our Global IP Search</p>
                    </div><?php #end advertCard-body ?>

                    <div class="advertCard-footer">
                        <div class="read-more">Global Search</div>
                    </div><?php #end advertCard-footer ?>
                </div><?php #end card ?>
            </a>
        </div><?php #end col ?>

        <div class="col">
            <a href="<?php echo $siteObject->getFeaturesMenuArray()['href'][2]; ?>">
                <div class="advert-card" id="<?php echo $siteObject->getFeaturesMenuArray()['menuId'][2]; ?>">
                    <div class="advertCard-body">
                        <?php echo $siteObject->getFeaturesMenuArray()['svgIco'][2]; ?>
                        <h2>Model Library</h2>
                        <p>View all models deployed across all of your regions with model specs available.</p>
                    </div><?php #end advertCard-body ?>

                    <div class="advertCard-footer">
                        <div class="read-more">Inventory Management</div>
                    </div><?php #end advertCard-footer ?>
                </div><?php #end card ?>
            </a>
        </div><?php #end col ?>
    </div><?php #end row ?>
</div><?php #end advert-home ?>