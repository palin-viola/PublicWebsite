<?php
$columnOne = "col-12 col-sm-1 col-xl-3";
$columnTwo = "col-12 col-sm-10 col-xl-6";
if(!empty($columnClass)) {
    $columnOne = "col-12 col-lg-1 col-xxl-2";
    $columnTwo = "col-12 col-lg-10 col-xxl-8";
}
?>
<div class="row g-0">
    <div class="<?php echo $columnOne; ?>"></div>
    <div class="<?php echo $columnTwo; ?> feature-wrapper <?php echo $paddingClass; ?>">
        <?php if(!empty($p)) { ?>
            <p><?php echo $p; ?></p>
        <?php } ?>
        <a href="<?php echo $href; ?>" class="btn btn-primary px-5" role="button"><?php echo $text; ?></a></p>
    </div>
    <div class="<?php echo $columnOne; ?>"></div>
</div>