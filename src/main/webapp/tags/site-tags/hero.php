<?php
    if(empty($h2)) {
        $h3Padding = $paddingClass;
    } else {
        $h3Padding = 'pt-1';
    }
?>
<div class="hero <?php echo $heroClass; ?>" role="complementary">
    <div class="hero-content">
        <div class="container">
            <div class="row">
                <div class="col-1 col-lg-1 col-xxl-2"></div>
                <div class="col-10 col-lg-10 col-xxl-8 hero-inner-bg">
                    <div class="row">
                        <div class="col-1 col-md-1 col-xxl-1"></div>
                        <div class="col-10 col-md-7 col-xxl-8">
                            <div class="hero-text">
                                <?php if(!empty($h2)) { ?><h2 class="<?php echo $paddingClass; ?>"><?php echo $h2; ?></h2><?php } ?><?php if(!empty($h3)) { ?><h3 class="<?php echo $h3Padding; ?>"><?php echo $h3; ?></h3><?php } ?>
                                <p class="py-2 py-lg-4"><?php if(!empty($heroContent)) { ?><?php echo $heroContent; ?><?php } ?></p>
                            </div><?php #end hero-text ?>
                        </div><?php #end col ?>
                        <div class="col-1 col-md-4 col-xxl-3"></div>
                    </div><?php #end row ?>
                </div><?php #end col.hero-inner-bg ?>
                <div class="col-1 col-lg-1 col-xxl-2"></div>
            </div><?php #end row ?>
        </div><?php #end container ?>
    </div><?php #end hero-content ?>
    <div class="hero-image"><img src="<?php echo $imgSrc; ?>" width="600" height="350" alt="<?php echo $title; ?>" title="<?php echo $title; ?>" class="img-fluid" /></div>
</div><?php #end hero ?>
