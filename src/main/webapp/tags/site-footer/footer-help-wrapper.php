<?php
$siteObject = new RackTrackSite();
?>
<div class="footer-help-wrapper py-5">
    <div class="container">
        <div class="row">
            <div class="col-12"><h2>Getting Help</h2></div>
            <div class="col-12 col-lg-6 help-col-ticket mt-3">
                <div class="row">
                    <div class="col-5">
                       <img src="images/help-ticket-ico.png" alt="Help to raise a ticket" aria-label="Help to raise a ticket" width="272" height="200" class="img-fluid" />
                    </div>
                    <div class="col-7">
                        <div class="px-3 pt-2 pt-xxl-4">
                            <p>Let's document any issues and work on getting this resolved!</p>
                            <div class="help-btn py-2 p6-s"><a class="btn btn-primary px-4" href="<?php echo $siteObject->getContactPage()['href'][0]; ?>" role="button">Raise a Ticket</a></div>
                        </div>
                    </div><?php #end col ?>
                </div><?php #end row ?>
            </div><?php #end col ?>

            <div class="col-12 col-lg-6 help-col-management mt-lg-3">
                <div class="row">
                    <div class="col-5">
                        <img src="images/help-managements-ico.png" alt="Help to raise a ticket" width="272" height="200"  aria-label="Help to raise a ticket" class="img-fluid" />
                    </div>
                    <div class="col-7">
                        <div class="px-3 pt-2 pt-xxl-4">
                            <p>Get back to maintaining <br />and managing your inventory!</p>
                            <div class="help-btn py-2 p6-s"><a class="btn btn-primary px-4" href="<?php echo $siteObject->getContactPage()['href'][0]; ?>" role="button">Manage</a></div>
                        </div>
                    </div><?php #end col ?>
                </div><?php #end row ?>
            </div><?php #end col ?>
        </div><?php #end row ?>
    </div><?php #end container ?>
</div><?php #end footer-help-wrapper ?>
