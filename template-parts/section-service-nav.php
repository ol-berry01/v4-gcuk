<div class="container">
    <div class="row">
        <div class="title-section">
            <h2 class="section-title"><?php the_sub_field('service_nav_title'); ?></h2>
        </div>

        <?php if( have_rows('service_nav_item') ): ?>
			<?php while( have_rows('service_nav_item') ): the_row(); ?>
            <div class="service-nav-wrapper" style="background:#fff;width:31.5%;margin:0 0.9% 2.5%;float:left;border-radius:0.17em;transition:800ms;box-shadow:5px 5px 25px 0px rgba(55,55,55,0.3);">
                <div style="background-image:url('<?php the_sub_field('service_nav_image'); ?>')"></div>
                <img src="url('<?php the_sub_field('service_nav_image'); ?>')">
                <div class="service-nav-content" style="margin:1em">
                    <h3><?php the_sub_field('service_nav_title'); ?></h3>
                    <p class="lead"><?php the_sub_field('service_nav_subtitle'); ?></p>
                    <p><?php the_sub_field('service_nav_content'); ?></p>
                    <a href="<?php the_sub_field('service_nav_link') ?>">
                        <button class="btn-details btn-block">More Details <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                    </a>
                </div>
            </div>
			<?php endwhile; ?>
		<?php endif; ?>
        <!-- III Section - 1 -->

        <img src="url('http://localhost:8888/wp-content/uploads/2017/11/fleet-rental-experts.jpg')">

        <div class="nav-iii-section wow fadeIn">
            <div class="nav-wrapper">
                <div class="nav-link" href="fleet-rental">
                    <p class="nav-title">Fleet Rental</p>
                    <p class="nav-subtitle">Packages with added benefits</p>
                    <div class="nav-text-wrapper">
                        <p>We have a tiered set of rental packages that will meet the demands of almost any golf course, holiday park or attraction.</p>
                    </div>
                    <button class="btn-details btn-block">Details <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
        <!-- End: III Section -->

        <!-- III Section - 2 -->
        <div class="nav-iii-section wow fadeIn">
            <div class="nav-wrapper">
                <div class="nav-link" href="/long-term-rental">
                    <p class="nav-title">Long Term Rental</p>
                    <p class="nav-subtitle">Individual Vehicles Rental Plans</p>
                    <div class="nav-text-wrapper">
                        <p>If you need a vehicle over an extended period of time then Golf Car UK will have a setup to meet your needs.</p>
                    </div>
                    <button class="btn-details btn-block">Details <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                </div> 
            </div>
        </div>
        <!-- End: III Sectio - 2 -->

        <!-- III Section - 3 -->
        <div class="nav-iii-section wow fadeIn">
            <div class="nav-wrapper">
                <div class="nav-link" href="short-term-rental">
                    <p class="nav-title">Short Term Rental</p>
                    <p class="nav-subtitle">Ideal For Event Hire</p>
                    <div class="nav-text-wrapper">
                        <p>We can organise as many vehicles as you need to meet the demands over a brief period, offering excellent value for money.</p>
                    </div>
                    <button class="btn-details btn-block">Details <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
        <!-- End: III Section -->
    </div>
</div>
