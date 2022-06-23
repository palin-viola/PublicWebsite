<?php
$siteObject = new RackTrackSite();
?>
<div class="feature-highlights">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <h2>Quick and Easy</h2>
            <p>Adding Devices to your inventory has never been easier! With thousands of Device Profiles, you can:</p>
            <ul>
                <li>Find your devices on Rack Track&trade; in seconds with our vast default equipment library</li>
                <li>Utilize Custom Equipment</li>
                <li>Efficiently manage your equipment with our naming and grouping system</li>
            </ul>
            <a href="<?php echo $siteObject->getFeaturesMenuArray()['href'][2]; ?>" aria-label="<?php echo $siteObject->getFeaturesMenuArray()['ariaLabel'][2]; ?>">Explore Features</a>
        </div>
        <div class="col img text-center order-first order-md-0">
            <img src="images/inventory-management.png" width="346" height="345" alt="<?php echo $siteObject->getFeaturesMenuArray()['ariaLabel'][2]; ?>" class="img-fluid" />
        </div>

        <div class="col img text-center">
            <img src="images/global-search.png" width="346" height="345" alt="<?php echo $siteObject->getFeaturesMenuArray()['ariaLabel'][0]; ?>" class="img-fluid" />
        </div>

        <div class="col">
            <h2>Intuitive Searching</h2>
            <p>Utilize Fast Global Search capability to pull up any device in your entire inventory.</p>
            <ul>
                <li>Utilizing intelligent search functionality</li>
                <li>Quickly and easily find equipment on any rack at any site</li>
                <li>Search results are easy-to-read, allowing you to find that data you need as efficiently as possible</li>
            </ul>
            <a href="<?php echo $siteObject->getFeaturesMenuArray()['href'][0]; ?>" aria-label="<?php echo $siteObject->getFeaturesMenuArray()['ariaLabel'][0]; ?>">Explore Features</a>
        </div>

        <div class="col order-1 order-md-0">
            <h2>Responsive User Interface</h2>
            <p>From this stylish and responsive interface, managing your inventory has never been easier.</p>
            <ul>
                <li>Provides service ready diagrams</li>
                <li>Design Option functionality allows an easily refinable display inventory</li>
                <li>Find inventory data with an aesthetically functional interface</li>
                <li>Quickly export any inventory design to Microsoft Excel with the click of a mouse</li>
            </ul>
            <a href="<?php echo $siteObject->getFeaturesMenuArray()['href'][4]; ?>" aria-label="<?php echo $siteObject->getFeaturesMenuArray()['ariaLabel'][4]; ?>">Explore Features</a>
        </div>
        <div class="col img text-center">
            <img src="images/dashboard.png" width="346" height="345" alt="<?php echo $siteObject->getFeaturesMenuArray()['ariaLabel'][4]; ?>" class="img-fluid" />
        </div>
    </div><?php #end row ?>
</div><?php #end feature-highlights ?>
