<div class="container">
    <?php if( have_rows('service_rental_options') ): ?>
        <?php while( have_rows('service_rental_options') ): the_row(); ?>
            <div class="nav-iii-section wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="nav-wrapper">
                    <div class="nav-img-wrapper">
                        <img src="<?php the_sub_field('rental_options_image'); ?>">
                    </div>
                    <h2>Golf Cars</h2>
                    <p class="nav-subtitle" style="">2 Persons &amp; Golf Bags</p>
                    <a class="nav-link" href="<?php the_sub_field('service_options_label'); ?>">
                        <button class="btn-details btn-block"><?php the_sub_field('service_options_label'); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></button> 
                    </a>
                    <div class="nav-text-wrapper">
                        <?php if ( get_sub_field('rental_options_toggle') ): ?>
                            <h3><small>from</small> £<?php the_sub_field('rental_options_long'); ?></h3>
                            <p>per week + vat</p>
                        <?php else: ?>
                            <?php if( have_rows('rental_options_short') ): ?>
                                <?php while( have_rows('rental_options_short') ): the_row(); ?>
                                    <div class="col-xs-4" style="text-align:center">
                                        <p class="lead" style="text-align:center"><?php the_sub_field('service_rental_shortperiod'); ?></p>
                                        <h3 style="text-align:center">£<?php the_sub_field('service_rental_shortprice'); ?></h3>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <div class="">
                                <small style="text-align:center;">Prices Shown Are Daily Rates. Excluding, Delivery, Collection &amp; VAT</small>
                            </div>
                        <? endif; ?>

                    

                        <!-- Long Term Price -->
                        
                        <!-- End: Long Term Price -->
                        
                        <!-- Short Term Price -->
                        
                        <!-- <div class="col-xs-4" style="text-align:center">
                            <p class="lead" style="text-align:center">3+ Days</p>
                            <h3 style="text-align:center">£49.75</h3>
                        </div>
                        <div class="col-xs-4" style="text-align:center">
                            <p class="lead" style="text-align:center">7+ Days</p>
                            <h3 style="text-align:center">£49.75</h3>
                        </div> -->
                        <!-- End: Short Term Price -->
                        
                    </div>
                    <!-- Long term features -->
                    <div>
                        <ul style="list-style:none">
                            <li>– Electric &amp; Petrol Models Available</li>
                            <li>– Flexible Terms Available</li>
                            <li>– Tailored Payment Solutions</li>
                        </ul>
                    </div>
                    <!-- End: Long term features -->
                </div>
            </div>
        <?php endwhile; ?>
<?php endif; ?>
</div>