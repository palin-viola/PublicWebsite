<?php
    $siteObject = new RackTrackSite();

    $columnOne = "col-12 col-sm-1 col-xl-3";
    $columnTwo = "col-12 col-sm-10 col-xl-6";
    if(!empty($columnClass)) {
        $columnOne = "col-12 col-lg-1 col-xxl-2";
        $columnTwo = "col-12 col-lg-10 col-xxl-8";
    }
?>
<div class="row pt-5 g-0">
    <div class="<?php echo $columnOne; ?>"></div>
    <div class="<?php echo $columnTwo; ?> feature-wrapper <?php echo $paddingClass; ?>">
        <h1 class="pb-3"><?php echo $h1; ?></h1>
        <?php if(!empty($p)) { ?>
            <p><?php echo $p; ?></p>
        <?php } ?>

        <?php if(!empty($submenuId)) { ?>
            <div class="tab-button-wrap">
            <?php
            $i = 0;
            foreach($siteObject->$submenuId()['text'] as $key => $value) {
                if ($i === 0) {
                    $strButtonClass = "tab-button tab-link active";
                } else {
                    $strButtonClass = "tab-button tab-link";
                }
                ?>
                <button class="<?php echo $strButtonClass; ?>" data-tabname="<?php echo $siteObject->$submenuId()['tabName'][$key]; ?>"><?php echo $siteObject->$submenuId()['svgIco'][$key]; ?><?php echo $siteObject->$submenuId()['text'][$key]; ?></button>
                <?php
                $i++;
            }
            ?>
            </div><?php #end tab-button-wrap ?>
        <?php } ?>
    </div>
    <div class="<?php echo $columnOne; ?>"></div>
</div>