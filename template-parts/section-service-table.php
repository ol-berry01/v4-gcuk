<section class="section-builder">
	<div id="service-packages" style="background:url('<?php the_sub_field('service_rental_background') ?>') 50% no-repeat fixed;background-size:cover;">

        <div class="container">
            <div class="row para-box">
                <div class="title-section">
                    <h2 class="section-title"><?php the_sub_field('service_rental_title'); ?></h2>
                    <p class="lead"><?php the_sub_field('service_rental_subtitle'); ?></p>
                </div>
                <div class="comparison-wrapper" style="">
                    <div class="features-list" style="">
                        <ul>
                            <li class="list-hidden" style=""><h4 class="gc-blue" style="font-size:1.3em;">Rental</h4></li>
                            <li>Rental<small> ex VAT</small></li>
                            <li>Vehicle</li>
                            <li>Battery Type</li>
                            <li>Condition</li>
                            <li>Contract Term</li>
                            <li>Battery Filling System</li>
                            <li>On-Board Charger</li>
                            <li>Delivery</li>
                            <li>Key Fobs</li>
                            <li>Club Logos <small>Front Panel</small></li>
                            <li>Numbers <small>Front &amp; Rear</small></li>
                            <li>Disclaimer Pads</li>
                            <li>Wheel Covers</li>
                            <li>BAGMA Training</li>
                            <li>Cabana<sup>&#42;</sup></li>
                            <li>Cool Box<sup>&#42;</sup> <small>(6 Bottle Capacity)</small></li>
                            <li>Ball &amp; Club Washer<sup>&#42;</sup></li>
                            <li>Message Holder<sup>&#42;</sup></li>
                            <li>Sand Bottle<sup>&#42;</sup></li>
                        </ul>
                        
                    </div>
                    <div class="product-wrapper wow fadeIn">
                        <?php if( have_rows('service_rental_table') ): ?>
                            <?php while( have_rows('service_rental_table') ): the_row(); 
                            // Declare variables
                            $true = '<i class="fa fa-check" aria-hidden="true" style="color:#41d102;"></i>';
                            $false = '<i class="fa fa-minus" aria-hidden="true"></i>';
                            ?>
                                <div class="rental-list">
                                    <ul>
                                        <li class="header" style="border-top:1px solid #c6c6c6;background:#000063;"><h4 style="color:#fff;"><?php the_sub_field('service_rental_header'); ?></h4></li>
                                        <li>&#163;<?php the_sub_field('service_rental_price'); ?> <small>12 Payments</small></li>
                                        <li><?php the_sub_field('service_rental_vehicle'); ?></li>
                                        <li><?php the_sub_field('service_rental_battery'); ?></li>
                                        <li><?php the_sub_field('service_rental_condition'); ?></li>
                                        <li><?php the_sub_field('service_rental_term'); ?></li>
                                        <li>
                                            <?php if ( get_sub_field( 'service_rental_bfs' ) ): ?>
                                                <?php echo $true; ?>
                                            <?php else: ?>
                                                <?php echo $false; ?>
                                            <?php endif; ?>
                                        </li>
                                        <li>
                                            <?php if ( get_sub_field( 'service_rental_obc' ) ): ?>
                                                <?php echo $true; ?>
                                            <?php else: ?>
                                                <?php echo $false; ?>
                                            <?php endif; ?>
                                        </li>
                                        <li>
                                            <?php if ( get_sub_field( 'service_rental_delivery' ) ): ?>
                                                <?php echo $true; ?>
                                            <?php else: ?>
                                                <?php echo $false; ?>
                                            <?php endif; // end of if field_name logic ?>
                                        </li>
                                        <li>
                                            <?php if ( get_sub_field( 'service_rental_fobs' ) ): ?>
                                                <?php echo $true; ?>
                                            <?php else: ?>
                                                <?php echo $false; ?>
                                            <?php endif; ?>
                                        </li>
                                        <li>
                                            <?php if ( get_sub_field( 'service_rental_logos' ) ): ?>
                                                <?php echo $true; ?>
                                            <?php else: ?>
                                                <?php echo $false; ?>
                                            <?php endif; ?>
                                        </li>
                                        <li>
                                            <?php if ( get_sub_field( 'service_rental_numbers' ) ): ?>
                                                <?php echo $true; ?>
                                            <?php else: ?>
                                                <?php echo $false; ?>
                                            <?php endif; ?>
                                        </li>
                                        <li>
                                            <?php if ( get_sub_field( 'service_rental_disc' ) ): ?>
                                                <?php echo $true; ?>
                                            <?php else: ?>
                                                <?php echo $false; ?>
                                            <?php endif; ?>
                                        </li>
                                        <li>
                                            <?php if ( get_sub_field( 'service_rental_covers' ) ): ?>
                                                <i class="fa fa-check" aria-hidden="true" style="color:#41d102;"></i>
                                            <?php else: ?>
                                                <?php echo $false; ?>
                                            <?php endif; ?>
                                        </li>
                                        <li>
                                            <?php if ( get_sub_field( 'service_rental_bagma' ) ): ?>
                                                <?php echo $true; ?>
                                            <?php else: ?>
                                                <?php echo $false; ?>
                                            <?php endif; ?>
                                        </li>
                                        <li><?php the_sub_field('service_rental_cabana'); ?></li>
                                        <li><?php the_sub_field('service_rental_coolbox'); ?></li>
                                        <li><?php the_sub_field('service_rental_washer'); ?></li>
                                        <li><?php the_sub_field('service_rental_message'); ?></li>
                                        <li><?php the_sub_field('service_rental_sand'); ?></li>
                                    </ul>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="" style="text-align:center;font-size:0.8em;">
                    <?php the_sub_field('service_rental_footer'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
